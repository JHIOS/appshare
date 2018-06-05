<?php
require_once("../config.php");//基础配置文件
require_once('../includes/function.php');//函数库
require_once('../includes/smarty.inc.php');//smarty模板配置
require_once('../includes/connect.php');
require_once('../includes/userShell.php');

//ini_set("display_errors", "On");
//error_reporting(E_ALL | E_STRICT);
$url=$_SERVER["REQUEST_URI"];
$url=parse_url($url);
$url=$url[path];

if(isset($_GET['key'])){
    $ckey = $_GET['key'];
}

if (isset($_GET['model'])){
    if ($_GET['model']=='merge'){
        $mkey=$_GET['mAKey'];
        $results1 = mysqli_query($con,"UPDATE sd_category SET mkey='$mkey' where ckey='$ckey'");
        $results1 = mysqli_query($con,"UPDATE sd_category SET mkey='$ckey' where ckey='$mkey'");
    }
    if ($_GET['model']=='unmerge'){
        $ckey=$_GET['ckey'];
        $mkey=$_GET['mkey'];
        $results1 = mysqli_query($con,"UPDATE sd_category SET mkey='' where ckey='$ckey'");
        $results2 = mysqli_query($con,"UPDATE sd_category SET mkey='' where ckey='$mkey'");
        if ($results1&$results2){
            echo json_encode(array('code'=>'0'));
        }else{
            echo json_encode(array('code'=>'1','message'=>'解除绑定失败'));

        }
        exit();
    }

}



if ($type=$_POST['type']){
    $html="";
    if ($type == "ipa"){
        $mtype="apk";
    }else{
        $mtype="ipa";
    }
    $catesql="select * from sd_category WHERE type = '$mtype' and (mkey is null or mkey = '')";
    $result1=mysqli_query($con,$catesql);
    while ($row=mysqli_fetch_assoc($result1)){
        $appname=$row['category'];
        $icon=$row['icon'];
        $ckey=$row['ckey'];
        $html = $html."<div class=\"col-lg-3 col-sm-4\">
                <div class=\"ibox\" onclick=\"selItem(this)\">
                    <div class=\"caption\">
                        <span class=\"fa-stack fa-lg\">
                            <i class=\"fa fa-check fa-lg\" style=\"font-size:40px;line-height:80px;\"></i>
                        </span>
                    </div>
                    <div class=\"ibox-content\">
                            <div class=\"text-center\">
                                <img src=\"../plist/$icon\" class=\"appicon\" onerror=\"javascript:this.src='../plist/default-icon.png'';\" style='margin-top:0px;margin-bottom:14px;' />
                            </div>
                        <input type=\"hidden\" class=\"mAKey\" value=\"$ckey\" />
                        <p style=\"word-break:keep-all; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;\" class=\"text-center\">$appname</p>
                    </div>
                </div>
            </div>";

    }

    echo $html;
    return;
}

$catesql="select * from sd_category WHERE ckey='$ckey'";
$result1=mysqli_query($con,$catesql);
while ($row=mysqli_fetch_assoc($result1)){
    $appname=$row['category'];
    $icon=$row['icon'];
    $downurl=$row['url'];
    $type=$row['type'];
    $mkey=$row['mkey'];
}

if ($mkey!=null){
    $catesql="select * from sd_category WHERE ckey='$mkey'";
    $result1=mysqli_query($con,$catesql);
    while ($row=mysqli_fetch_assoc($result1)){
        $mappname=$row['category'];
        $micon=$row['icon'];
        $mdownurl=$row['url'];
        $mtype=$row['type'];
    }

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
$smarty->assign("icon",$url."plist/".$icon);
$smarty->assign("downurl",$url."f.php?k=".$downurl);
$smarty->assign("type",$type);
$smarty->assign("mkey",$mkey);
$smarty->assign("ckey",$ckey);
//关联应用
$smarty->assign("mappname",$mappname);
$smarty->assign("micon",$url."plist/".$micon);
$smarty->assign("mdownurl",$url."f.php?k=".$mdownurl);
$smarty->assign("mtype",$mtype);


$smarty->assign("tit", $tit);
$smarty->assign("zzurl", $url);
$smarty->assign("isVisitor", $isVisitor);
$smarty->assign("userinfo", $userInfo);
$smarty->assign("head", $head);
$smarty->assign("jscode", 'Powerd by <a target="_blank" href="https://appstore.yonyou.com">用友金融</a> '.$jscode);

$smarty->display("merge.html");
?>