<?php
require_once("./config.php");//基础配置文件
require_once('./includes/function.php');//函数库
require_once('./includes/smarty.inc.php');//smarty模板配置
require_once('./includes/connect.php');
require_once('./includes/userShell.php');
$share_key=$_GET['k'];
$real_key=$share_key;
$share_c=inject_check($share_key);
//ini_set("display_errors", "On");
//error_reporting(E_ALL | E_STRICT);
if($share_c=="bad"){exit();}
$result = mysqli_query($con,"SELECT * FROM sd_setting");//获取数据
while($row = mysqli_fetch_assoc($result)){ 

	$tit= $row['main_tit'];
	$theme= $row['theme'];
	$des= $row['desword'];
	$kw= $row['keyword'];
	$tjcode= $row['tjcode'];
	$share= $row['share'];
	$url= $row['zzurl'];
}

if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')){
    $systerm='ipa';
    $aType='ios';
}else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android')){
    $systerm='apk';
    $aType='android';
}else{
    $systerm='other';
    $aType='other';
}
if(strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')){
    $isWechatRequest=1;

}




if($share=="false"){ 
	//echo'<script>document.location="./../views/error.php";</script>';
	
	exit();
}

$sql="select ckey,category,mkey,type from sd_category where url='$share_key'";
$result=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($result)){
    $ckey=$row['ckey'];
    $mkey=$row['mkey'];
    $type=$row['type'];
    if ($systerm!='other'&$systerm!=$type&$mkey!=''){
        $ckey=$mkey;
    }
    $sql="select key1 from sd_file where category='$ckey'";
    $result1=mysqli_query($con,$sql);
    while ($row1=mysqli_fetch_assoc($result1)){
        $filekey=$row1['key1'];
        $sql="select sskey from sd_ss where filekey='$filekey' order by id DESC limit 1";
        $result2=mysqli_query($con,$sql);
        while ($row2=mysqli_fetch_assoc($result2)){
            $share_key=$row2['sskey'];
        }
    }
}



$cha=mysqli_query($con,"SELECT * FROM sd_ss where sskey = '$share_key'");
if(mysqli_num_rows($cha)=="0"){
	
	echo'<script>document.location="./../views/error.php?t=您访问的文件不存在或已被删除";</script>';
	exit();
}
while($row1 = mysqli_fetch_assoc($cha)){ 
 
	$key1= $row1['filekey'];
	$ssnum=$row1['sskey'];
	$num=$row1['downloadnum'];
 
}

$cha2=mysqli_query($con,"SELECT * FROM sd_file where key1 = '$key1'");
while($row2 = mysqli_fetch_assoc($cha2)){ 
	$name= $row2['name'];
	$ming= $row2['ming'];
	$ipname=$row2['filename'];
	$uptime=$row2['uploadtime'];
	$size=$row2['size'];
	$ver=$row2['version'];
	$bundleid=$row2['package'];
	$imgurl=$url.'plist/'.$row2['icon'];
    $ckey=$row2['category'];
    $sql=mysqli_query($con,"select category,type from sd_category where ckey='$ckey'");
    while ($row=mysqli_fetch_assoc($sql)){
        $fxname=$row['category'];
        $type=$row['type'];
    }
}

$urls = str_replace("http://","https://",$url);

if ($type=='ipa'){
    $downurl='itms-services://?action=download-manifest&url='.$urls.'plist/'.$name;
}else{
    $downurl=$urls.'install.php?name='.$name.'&att='.$fxname.'-'.$uptime.'-'.$ver.'.apk';
}



$smarty->template_dir = "./content/themes/".$theme;
	$head='<script type="text/javascript" src="./includes/js/jquery-1.9.1.min.js"></script>';
	$jscode=$tjcode;
	$smarty->assign("num", $num);
	$smarty->assign("aType",$aType);
	$smarty->assign("isWechatRequest",$isWechatRequest);
	$smarty->assign("filename", $fxname);
	$smarty->assign("bundleid",$bundleid);
	$smarty->assign("zzurl", $url); 
	$smarty->assign("urls", $urls); 
	$smarty->assign("ver", $ver); 
	$smarty->assign("ssnum", $ssnum); 
	$smarty->assign("key", $real_key);
	$smarty->assign("skey",$share_key);
	//$smarty->assign("filename", $ming); //文件名
//	$smarty->assign("fileurl", $serverUrl.$ming); //外链URL
	$smarty->assign("time",$uptime);
	$smarty->assign("name", $name);
	$smarty->assign("imgurl", $imgurl);	
	$smarty->assign("codeurl",$downurl);
	$smarty->assign("size",$size);
	$smarty->assign("type",$type);
//	$smarty->display("nd.html");
    $smarty->display("green.html");


?>