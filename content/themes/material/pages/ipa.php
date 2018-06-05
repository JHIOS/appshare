<?php
session_start();
if($isVisitor == "true"){
	echo '<script>window.location.href="login.php";</script>';
	exit();
}else{}

$smarty->template_dir = "./../content/themes/".$theme;
$head='<script type="text/javascript" src="./../includes/js/jquery-1.9.1.min.js"></script>';
$jscode=$tjcode;
$smarty->assign("tit", $tit);
$smarty->assign("zzurl", $url1); 
$smarty->assign("isVisitor", $isVisitor); 
$smarty->assign("userinfo", $userInfo); 
$smarty->assign("jscode", 'Powerd by <a target="_blank" href="https://appstore.yonyou.com">用友金融</a> '.$jscode);
$smarty->display("ipa.html");
?>