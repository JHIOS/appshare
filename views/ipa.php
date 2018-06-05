<?php 
$re = "ok.ok";
$replace = array(
    '/',
    '&',
    '.',
    ''
);
require_once("../config.php");//引入配置文件
require_once('../includes/function.php');//引入函数库
require_once('../includes/connect.php');
require_once('../includes/userShell.php');
date_default_timezone_set("Asia/Shanghai");//设置时区
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
$fileDir="data";
$plistDir="plist";
//$filename = $_REQUEST['filename'];

$filename = $_GET['filename'];
$name = $_GET['name'];
$keyuid=$_GET['uid'];
$fname = str_replace($replace, "", $_GET['filename']);
$rname =$_GET['filename'];
$fkey =$_GET['uid'];

if ($fname == "") {
    $jieguo = "p.bad.文件名不能为空";
} else {
    $result = mysqli_query($con,"SELECT * FROM sd_setting"); //获取数据
    while ($row = mysqli_fetch_assoc($result)) {
        $zzurl = $row['zzurl'];
    };
	
    $dd = date('Y-m-d H:i:s'); //获取当前时间
    $ran = md5(time() . mt_rand(0, 1000)); //生成随机字符
    $rand = preg_split('//', $ran, -1, PREG_SPLIT_NO_EMPTY);
    $pkey = $rand[0] . $rand[1] . $rand[2] . $rand[3] . $rand[4];
    $uid = $userInfo['uid'];

    $sql = "INSERT INTO  `$sqlname`.`sd_ss` (`sskey` ,`filekey` ,`sstime` ,`downloadnum` ,`fname`,`cuser`,`name`)VALUES ('$pkey', '$fkey', '$dd', '0' ,?, '$uid', '$name');";
    if (!$con) {
        $re = "bad.数据库连接失败";
    } else {
        $stmt = $con->prepare($sql);
        $stmt->bind_param('s', $rname);
        $stmt->execute();
    };

    $jieguo = $ftype . "." . $re . "." . "f.php?k=" . $pkey;
    
}



$ipaname=mysqli_query($con,"SELECT * FROM sd_file where key1 = '$keyuid'");

while($row2 = mysqli_fetch_assoc($ipaname)){ 
	$scid= $row2['policyid'];
	$name=$row2['ming'];
  $ipaname=mysqli_query($con,"SELECT * FROM sd_policy where id = '$scid'");
  while($row2 = mysqli_fetch_assoc($ipaname)){
	  $downurl= $row2['p_url'].$name;
	  
  }
 
}

$baseurlsql=mysqli_query($con,"SELECT * FROM sd_setting where admin_name = 'admin'");
while ($row3=mysqli_fetch_assoc($baseurlsql)){
    $baseurl=$row3['zzurl'];
}

	$newname=explode(".",$rname);
	$ipabao	= mysqli_query($con,"SELECT * FROM sd_ipa WHERE bname='$newname[0]'");//获取数据
	while($s = mysqli_fetch_assoc($ipabao)){ 
	$ids= $s['ids'];
	$bname= $s['bname'];
	$ver= $s['ver'];
	$imageurl= $s['imgurl'];
	$flid= $s['id'];
 
}
    $size=filesize(dirname(dirname(__FILE__))."/".$fileDir."/".$name);
    $size=number_format($size/1000000,2);


    require_once ('../util/Classes/ThirdPartyLib/ipaParser.php');
	$ipaInfo= new ipaParser();
	$ipaInfo->parse(dirname(dirname(__FILE__))."/".$fileDir."/".$name);

    $Package = $ipaInfo->getPackage();
    $Version = $ipaInfo->getVersion();
    $AppName = $ipaInfo->getAppName();
    $Category = $ipaInfo->getCategory();
    $icon = $ipaInfo->getIcon();


    if (!$Category){
        $Category=$AppName;
    }


    //生成plist
    $pfileName = createPlistFileName(6);
    $iconname=$pfileName.'_fix.png';

	//$infoArray['url'] = 'http://回调的地址/test.ipa';
//	$downurl = 'http://7xtf3w.com2.z0.glb.qiniucdn.com/'.$name;
	//生成一个plist文件(以下代码放到回调页面，上传成功页面同时上传icon文件到服务器)
	require_once('../util/Classes/ThirdPartyLib/CFPropertyList/CFPropertyList.php'); 
	/* 
	* 创建一个新的并没有加载任何内容的CFPropertyList实例 
	*/ 
	$plist = new CFPropertyList();
	// PList的根元素是一个Dictionary 
	$plist->add( $dict = new CFDictionary() );
	$dict->add('items',$array = new CFArray());
	$array->add($dict2 = new CFDictionary());
	
	$dict2->add('assets',$assetsArray = new CFArray());
	$assetsArray->add($assetsDict1 = new CFDictionary());
	$assetsDict1->add('kind',new CFString('software-package'));
	$assetsDict1->add('url',new CFString($downurl));
	
	
	$assetsArray->add($assetsDict2 = new CFDictionary());
	$assetsDict2->add('kind',new CFString('full-size-image-package'));
	$assetsDict2->add('needs-shine',new CFBoolean(true));
	//图标url需更改
	$assetsDict2->add('url',new CFString($baseurl.'plist/'.$iconname));

	$assetsArray->add($assetsDict3 = new CFDictionary());
	$assetsDict3->add('kind',new CFString('display-image'));
	$assetsDict3->add('needs-shine',new CFBoolean(true));
	$assetsDict3->add('url',new CFString($baseurl.'plist/'.$iconname));
	
	
	$dict2->add('metadata',$dict3 = new CFDictionary());
	$dict3->add('bundle-identifier',new CFString($Package));
	$dict3->add('bundle-version',new CFString($Version));
	$dict3->add('kind',new CFString('software'));
	$dict3->add('subtitle',new CFString($AppName));
	$dict3->add('title',new CFString($AppName));

	

	//生成plist文件名位于项目目录/plist/下
	$plist->saveXML("../plist/$pfileName".'.plist');
    //    fwrite("../plist/123.png",$icon);
    file_put_contents("../plist/$pfileName".'.png',$icon);


    $Command = sprintf("%s %s %s", dirname(__DIR__)."/plist/". "pngdefry", "-s_fix", dirname(__DIR__)."/plist/$pfileName".'.png');
    exec($Command, $out, $resultCode);
    if ($resultCode==0){
        @unlink(dirname(__DIR__)."/plist/$pfileName".'.png');
    }


    $categorysql=mysqli_query($con,"select * from sd_category where category='$Category' and type='ipa'");
    if ($row=mysqli_fetch_assoc($categorysql)){
        $ckey=$row['ckey'];

        $results1 = mysqli_query($con,"UPDATE sd_category SET nversion='$Version',icon = '$iconname',lasttime ='$dd'  where category='$Category' and type='ipa'");

    }else{

        $ckey=substr($ran,1,8);
        $sql="INSERT INTO sd_category (category,ckey,url,nversion,icon,lasttime,type) VALUES ('$Category', '$ckey', '$ckey', '$Version', '$iconname', '$dd','ipa')";
        $results1=mysqli_query($con,$sql);


    }

	//echo $pListFile;
	$results1 = mysqli_query($con,"UPDATE sd_file SET name = '$pfileName.plist',filename='$newname[0]', category='$ckey',size='$size',icon='$iconname',package='$Package',version='$Version' WHERE key1 = '$keyuid'");

	//echo $jieguo;
	 header('Location:../f.php?k='.$pkey );
/*}else{
 
}*/

	function unzipIpaFile($ipaFile)
	{
		\PHP_TOT_OTAServer\unzip($ipaFile, "Temp/");
		return "Temp/";
	}
/*
* $unzipPath : unzipPath of ipa
* return value : path of app dir in unzipPath
*/
	function appPathFromUnzipPath($unzipPath)
	{
		print("<pre>");
		$payloadPath = $unzipPath . "Payload";
		$appPath = null;
		if (file_exists($payloadPath))
		{
			if ($handle = opendir($payloadPath))
			{
				while (false !== ($file = readdir($handle)))
				{
					$isContain = strstr($file, ".app");
					if ($isContain)
					{
						$appPath = $payloadPath . "/" . $file . "/";
					}
				}
				closedir($handle);
			}
		}
		print("</pre>");
		return $appPath;
	}
	
function createPlistFileName($len) 
{ 
  $chars_array = array( 
    "0", "1", "2", "3", "4", "5", "6", "7", "8", "9",
    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", 
    "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", 
    "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", 
    "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", 
    "S", "T", "U", "V", "W", "X", "Y", "Z", 
  ); 
  $charsLen = count($chars_array) - 1; 
  
  $outputstr = ""; 
  for ($i=0; $i<$len; $i++) 
  { 
    $outputstr .= $chars_array[mt_rand(0, $charsLen)]; 
  } 
  return $outputstr; 
} 
