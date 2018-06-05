<?php
/**
 * Created by PhpStorm.
 * User: jianghao
 * Date: 2017/2/15
 * Time: 上午11:10
 */
downfile();

function downfile()
{
    $name=$_GET['name'];
    $attachment=$_GET['att'];

    $filename=realpath("/data/".$name); //文件名
    $date=date("Ymd-H:i:m");
    Header( "Content-type:  application/vnd.android.package-archive ");
    Header( "Accept-Ranges:  bytes ");
    Header( "Accept-Length: " .filesize($filename));
    header( "Content-Disposition:  attachment;  filename= $attachment");
//    echo file_get_contents($filename);
    readfile($filename);
}

?>