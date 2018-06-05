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

$package=$_GET['package'];
$icon=$_GET['icon'];
$label=$_GET['label'];
$appname=$_GET['appname'];


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


    require_once ('../util/Classes/ThirdPartyLib/ApkParser.php');
    $apkinfo=new ApkParser();
    $apkinfo->open(dirname(dirname(__FILE__))."/".$fileDir."/".$name,$icon);

    $icon = $apkinfo->getIcon();
    $Version = $apkinfo->getVersionName();
    $Package = $apkinfo->getPackage();
    $iconname = createPlistFileName(6).'.png';
    file_put_contents("../plist/$iconname",$icon);

    if ($appname=='undefined'){
        $Category=$label;
    }else{
        $Category=$appname;
    }

    $categorysql=mysqli_query($con,"select * from sd_category where category='$Category' and type='apk'");
    if ($row=mysqli_fetch_assoc($categorysql)){
        $ckey=$row['ckey'];

        $results1 = mysqli_query($con,"UPDATE sd_category SET nversion='$Version',icon = '$iconname',lasttime ='$dd'  where category='$Category' and type='apk'");

    }else{

        $ckey=substr($ran,1,8);
        $sql="INSERT INTO sd_category (category,ckey,url,nversion,icon,lasttime,type) VALUES ('$Category', '$ckey', '$ckey', '$Version', '$iconname', '$dd','apk')";
        $results1=mysqli_query($con,$sql);


    }

    //echo $pListFile;
    $results1 = mysqli_query($con,"UPDATE sd_file SET name = '$name',filename='$newname[0]', category='$ckey',size='$size',icon='$iconname',package='$Package',version='$Version' WHERE key1 = '$keyuid'");

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
