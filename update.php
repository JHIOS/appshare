<?php
/**
 * Created by PhpStorm.
 * User: jianghao
 * Date: 2017/2/13
 * Time: 下午1:51
 */
require_once("./config.php");//基础配置文件
require_once('./includes/function.php');//函数库
require_once('./includes/connect.php');

$apptype=$_POST['type'];
$appname=$_POST['name'];


$msg=array('code'=>'1','msg'=>'检测更新成功');

if (!$appname||!$apptype){
    $msg['code']=0;
    $msg['msg']='检测失败 参数不完整';
    echo decodeUnicode(json_encode($msg));
    exit();
}


$sql="select ckey,category,type from sd_category where category='$appname' and type = '$apptype'";
$result=mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($result)){
    $ckey=$row['ckey'];

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

    $msg['code']=0;
    $msg['msg']='检测失败 文件不存在';
    echo decodeUnicode(json_encode($msg));
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
    $ver=$row2['version'];
    $ckey=$row2['category'];
    $sql=mysqli_query($con,"select category,type from sd_category where ckey='$ckey'");
    while ($row=mysqli_fetch_assoc($sql)){
        $type=$row['type'];
    }
}

$result = mysqli_query($con,"SELECT * FROM sd_setting");//获取数据
while($row = mysqli_fetch_assoc($result)){
    $url= $row['zzurl'];
}

$urls = str_replace("http://","https://",$url);

//if ($type=='ipa'){
//    $downurl='itms-services:///?action=download-manifest&url='.$urls.'/plist/'.$name;
//}else{
//    $downurl=$urls.'data/'.$name;
//}
$downurl=$urls.'f.php?k='.$share_key;

$msg['versionCode']=$ver;
$msg['update_url']=$downurl;
$msg['update_msg']='版本更新';

echo decodeUnicode(json_encode($msg));


function decodeUnicode($str){
    return preg_replace_callback('/\\\\u([0-9a-f]{4})/i',
        create_function(
            '$matches',
            'return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UCS-2BE");'
        ),
        $str);
}

?>