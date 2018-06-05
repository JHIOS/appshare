<?php
require_once("../config.php");//基础配置文件
require_once('../includes/function.php');//函数库
require_once('../includes/smarty.inc.php');//smarty模板配置
require_once('../includes/connect.php');
require_once('../includes/userShell.php');
$pageval = '1';
if(isset($_GET['page'])){
    $pageval = $_GET['page'];
}
if(isset($_GET['key'])){
    $ckey = $_GET['key'];
}
//ini_set("display_errors", "On");
//error_reporting(E_ALL | E_STRICT);
$url=$_SERVER["REQUEST_URI"];
$url=parse_url($url);
$url=$url[path];
$pagesize=10;

$numq=mysqli_query($con,"SELECT * FROM sd_file where category='$ckey'");
$num = mysqli_num_rows($numq);


$page=($pageval-1)*$pagesize;
$page.=',';

if($num > $pagesize){
    if($pageval<=1)$pageval=1;
}
$line="SELECT * FROM `sd_file` WHERE category='$ckey' ORDER BY `id` DESC limit $page $pagesize ";
$pagenum=ceil($num/$pagesize);
$fileData = array();
$fileDataOne = array();
$query=mysqli_query($con,$line);
while($row=mysqli_fetch_assoc($query)){
    $fileDataOne = $row;

    $filekey=$row['key1'];
    $ssql="select * from sd_ss WHERE filekey='$filekey'";
    $query2=mysqli_query($con,$ssql);
    while ($row2=mysqli_fetch_assoc($query2)){
        $fileDataOne['sskey']=$row2['sskey'];
        $fileDataOne['downloadnum']=$row2['downloadnum'];
    }

    $fileData[] = $fileDataOne;
}
$jilu ="共有 $num 条记录&nbsp;&nbsp;当前第 $pageval 页，共 $pagenum 页";
if($pageval=="1"){
    $pre =  "##";
}else{
    $pre =  $url."appdetail.php?key=$ckey&page=".($pageval-1);
}
if ($pageval==$pagenum){
    $ne =  "##";
}else{
    $ne =  $url."appdetail.php?key=$ckey
    
    
    &page=".($pageval+1);
}
$p = new PageTool($num,$pageval,$pagesize);

$catesql="select * from sd_category WHERE ckey='$ckey'";
$result1=mysqli_query($con,$catesql);
while ($row=mysqli_fetch_assoc($result1)){
    $appname=$row['category'];
    $lasttime=$row['lasttime'];
    $icon=$row['icon'];
    $version=$row['nversion'];
    $downurl=$row['url'];
    $type=$row['type'];
}






$result1 = mysqli_query($con,"SELECT * FROM sd_setting");//获取数据
while($row1 = mysqli_fetch_assoc($result1)){
    $tit= $row1['main_tit'];
    $theme= $row1['theme'];
    $url= $row1['zzurl'];
    $domain= $row1['kjurl'];
    $tjcode= $row1['tjcode'];
}

$smarty->template_dir = "./../content/themes/".$theme;
$head='<script type="text/javascript" src="./../includes/js/jquery-1.9.1.min.js"></script>';
$jscode=$tjcode;

$smarty->assign("appname",$appname);
$smarty->assign("lasttime",$lasttime);
$smarty->assign("icon",$url."plist/".$icon);
$smarty->assign("version",$version);
$smarty->assign("downurl",$url."f.php?k=".$downurl);
$smarty->assign("ckey",$ckey);
$smarty->assign("type",$type);

$smarty->assign("tit", $tit);
$smarty->assign("zzurl", $url);
$smarty->assign("isVisitor", $isVisitor);
$smarty->assign("userinfo", $userInfo);
$smarty->assign("head", $head);
$smarty->assign("fy", $p->show());
$smarty->assign("jilu", $jilu);
$smarty->assign("pre", $pre);
$smarty->assign("ne", $ne);
$smarty->assign("filedata", $fileData);
$smarty->assign("jscode", 'Powerd by <a target="_blank" href="https://appstore.yonyou.com">用友金融</a> '.$jscode);

$smarty->display("appdetail.html");
?>