<?php
 
 error_reporting(0);//设置错误级别0
$sqlip=$_POST['sqlip'];
$sqlid=$_POST['sqlid'];
$sqlport=$_POST['sqlport'];
$sqlpass=$_POST['sqlpass'];
$sqlname=$_POST['sqlname'];
$zzurl=$_POST['zzurl'];
$yhm=$_POST['yhm'];
$mm=$_POST['mm'];
if($sqlip==""||$sqlid==""||$sqlname==""||$zzurl==""||$yhm==""||$mm==""||$sqlport==""){ 
echo "bad|信息填写不完整"; 
exit();
}

@$con = new mysqli($sqlip,$sqlid,$sqlpass,$sqlname,$sqlport);
if (mysqli_connect_errno())
  {
  die('bad|无法连接数据库，错误信息：' .mysqli_connect_error()."请检查数据库信息是否正确<br>");
  }


mysqli_query($con,"SET NAMES utf8");
 $ju="
DROP TABLE IF EXISTS `sd_file`;
CREATE TABLE IF NOT EXISTS `sd_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ming` text CHARACTER SET utf8 NOT NULL,
  `key1` text CHARACTER SET utf8 NOT NULL,
  `uploadip` text CHARACTER SET utf8,
  `uploadtime` text CHARACTER SET utf8,
  `cishuo` text CHARACTER SET utf8 NOT NULL,
  `upuser` text CHARACTER SET utf8 NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `filename` text CHARACTER SET utf8 NOT NULL,
  `policyid` int(11) NOT NULL,
  `category` text CHARACTER SET utf8,
  `size` double DEFAULT NULL,
  `version` text CHARACTER SET utf8,
  `package` text CHARACTER SET utf8,
  `icon` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
DROP TABLE IF EXISTS `sd_category`;
CREATE TABLE `sd_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text COLLATE utf8_bin NOT NULL,
  `ckey` text CHARACTER SET utf8 NOT NULL,
  `url` text CHARACTER SET utf8,
  `nversion` text CHARACTER SET utf8 NOT NULL,
  `icon` text CHARACTER SET utf8,
  `lasttime` datetime NOT NULL,
  `type` text CHARACTER SET utf8,
  `mkey` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
 CREATE TABLE `sd_ipa` (
  `id` int(11) NOT NULL,
  `bname` text COLLATE utf8_bin NOT NULL,
  `ver` text COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `ids` text COLLATE utf8_bin NOT NULL,
  `resign` text COLLATE utf8_bin NOT NULL,
  `imgurl` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
CREATE TABLE IF NOT EXISTS `sd_policy` (
  `id` int(1) NOT NULL,
  `p_name` text COLLATE utf8_bin NOT NULL,
  `p_type` text COLLATE utf8_bin NOT NULL,
  `p_server` text COLLATE utf8_bin NOT NULL,
  `p_bucketname` text COLLATE utf8_bin NOT NULL,
  `p_url` text COLLATE utf8_bin NOT NULL,
  `p_ak` text COLLATE utf8_bin NOT NULL,
  `p_sk` text COLLATE utf8_bin NOT NULL,
    `p_op_name` text COLLATE utf8_bin NOT NULL,
      `p_op_pwd` text COLLATE utf8_bin NOT NULL,
  `p_filetype` text COLLATE utf8_bin NOT NULL,
  `p_mimetype` text COLLATE utf8_bin NOT NULL,
  `p_size` text COLLATE utf8_bin NOT NULL,
  `p_autoname` text COLLATE utf8_bin NOT NULL,
  `p_dir` text COLLATE utf8_bin NOT NULL,
  `p_namerule` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
INSERT INTO `sd_policy` (`id`, `p_name`, `p_type`, `p_server`, `p_bucketname`, `p_url`, `p_ak`, `p_sk`, `p_filetype`, `p_mimetype`, `p_size`, `p_autoname`, `p_dir`, `p_namerule`, `p_op_name`, `p_op_pwd`) VALUES
(1, '默认方案-本地', 'local', '-', '-', '".$zzurl."data/', '-', '-', 'ipa', '*', '10485760', 'true', 'data', 'f_{rand8}', '-' ,'-');
CREATE TABLE IF NOT EXISTS `sd_setting` (
  `id` int(1) NOT NULL,
  `main_tit` text COLLATE utf8_bin NOT NULL,
  `tit_2` text COLLATE utf8_bin NOT NULL,
  `keyword` text COLLATE utf8_bin NOT NULL,
  `desword` text COLLATE utf8_bin NOT NULL,
  `kjming` text COLLATE utf8_bin NOT NULL,
  `ak` text COLLATE utf8_bin NOT NULL,
  `sk` text COLLATE utf8_bin NOT NULL,
  `kjurl` text COLLATE utf8_bin NOT NULL,
  `zzurl` text COLLATE utf8_bin NOT NULL,
  `admin_name` text COLLATE utf8_bin NOT NULL,
  `admin_password` text COLLATE utf8_bin NOT NULL,
  `theme` text COLLATE utf8_bin NOT NULL,
  `upload_minetype` text COLLATE utf8_bin NOT NULL,
  `upload_size` text COLLATE utf8_bin NOT NULL,
  `upload_fpsize` text COLLATE utf8_bin NOT NULL,
  `autoname` text COLLATE utf8_bin NOT NULL,
  `tjcode` text COLLATE utf8_bin NOT NULL,
  `morelimt` text COLLATE utf8_bin NOT NULL,
  `leixing` text COLLATE utf8_bin NOT NULL,
  `daxiao` text COLLATE utf8_bin NOT NULL,
  `share` text COLLATE utf8_bin NOT NULL,
  `version` text COLLATE utf8_bin NOT NULL,
  `notice` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
INSERT INTO `sd_setting` (`id`, `main_tit`, `tit_2`, `keyword`, `desword`, `kjming`, `ak`, `sk`, `kjurl`, `zzurl`, `admin_name`, `admin_password`, `theme`, `upload_minetype`, `upload_size`, `upload_fpsize`, `autoname`, `tjcode`, `morelimt`, `leixing`, `daxiao`, `share`, `version`, `notice`) VALUES
(0, '用友金融APP分发', '用友金融, 用友金融', '-', '-', '-', '-', '".$zzurl."', 'admin', '-', 'material', '-', '-', '-', '-', '', '-', '-', '-', 'true', '2.4A|12A|12A', '');
CREATE TABLE IF NOT EXISTS `sd_ss` (
  `id` int(11) NOT NULL,
  `sskey` text CHARACTER SET utf8 NOT NULL,
  `fname` text CHARACTER SET utf8 NOT NULL,
  `filekey` text CHARACTER SET utf8 NOT NULL,
  `sstime` text CHARACTER SET utf8 NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `downloadnum` text CHARACTER SET utf8 NOT NULL,
  `cuser` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
CREATE TABLE IF NOT EXISTS `sd_sskey` (
  `id` int(11) NOT NULL,
  `sskey` text CHARACTER SET utf8 NOT NULL,
  `filekey` text CHARACTER SET utf8 NOT NULL,
  `passwd` text CHARACTER SET utf8 NOT NULL,
  `sstime` text CHARACTER SET utf8 NOT NULL,
  `downloadnum` text CHARACTER SET utf8 NOT NULL,
  `fname` text CHARACTER SET utf8 NOT NULL,
  `cuser` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
CREATE TABLE IF NOT EXISTS `sd_user` (
  `id` int(11) NOT NULL,
  `username` text CHARACTER SET utf8 NOT NULL,
  `pwd` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
INSERT INTO `sd_user` (`id`, `username`, `pwd`) VALUES
(1, '".$yhm."', '".md5($mm."sdshare")."');
CREATE TABLE IF NOT EXISTS `sd_usergroup` (
  `id` int(11) NOT NULL,
  `gname` text COLLATE utf8_bin NOT NULL,
  `addtime` text COLLATE utf8_bin NOT NULL,
  `policyid` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
INSERT INTO `sd_usergroup` (`id`, `gname`, `addtime`, `policyid`) VALUES
(1, '游客', '-', '1'),
(2, '注册会员', '-', '1');
CREATE TABLE IF NOT EXISTS `sd_users` (
  `uid` int(11) NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `pwd` text COLLATE utf8_bin NOT NULL,
  `group` text COLLATE utf8_bin NOT NULL,
  `regtime` text COLLATE utf8_bin NOT NULL,
  `policy` text COLLATE utf8_bin NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
ALTER TABLE `sd_file`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`), ADD KEY `id_3` (`id`);
  ALTER TABLE `sd_policy`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_4` (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`), ADD KEY `id_3` (`id`);
ALTER TABLE `sd_setting`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sd_ss`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sd_sskey`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sd_user`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sd_usergroup`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sd_users`
  ADD PRIMARY KEY (`uid`);
ALTER TABLE `sd_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `sd_policy`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
ALTER TABLE `sd_ss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `sd_sskey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `sd_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
ALTER TABLE `sd_usergroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
ALTER TABLE `sd_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
  ALTER TABLE `sd_ipa`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sd_ipa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT
 ";
 $juju=explode(";",$ju);
 $num=count($juju);
 $x=1;

 while($x<=$num){ 
 $t=$x-1;

 
 if(!mysqli_query($con,$juju[$t])){
	 
	 die("bad|无法创建数据表：".mysqli_errno($con));
	 }
	 
$x++;
 }
 if (!file_exists("../config.php")){
	@$fopen  =   fopen("../config.php",   'wb ');//新建文件命令 
if (!$fopen){
	echo "bad|无法创建config.php，请检查你的权限";
	}
	fclose($fopen); 
			}

	@$fopen1  =   fopen("../config.php",   'wb ');//新建文件命令 
	
	$val='<?php
$sqlid="'.$sqlid.'";//数据库用户名
$sqlpass="'.$sqlpass.'";//数据库密码
$sqlname="'.$sqlname.'";//数据库名
$sqlip="'.$sqlip.'";//数据库服务器
$sqlport="'.$sqlport.'";//数据库端口
?>';
fputs($fopen1,$val);//向文件中写入内容; 
fclose($fopen1); 
function delDirAndFile( $dirName )  
{  
if ( @$handle = opendir( "$dirName" ) ) {  
   while ( false !== ( $item = readdir( $handle ) ) ) {  
   if ( $item != "." && $item != ".." ) {  
   if ( is_dir( "$dirName/$item" ) ) {  
   delDirAndFile( "$dirName/$item" );  
   } else {  
   if( unlink( "$dirName/$item" )){} ;  
   }  
   }  
   }  
   closedir( $handle );  
   if( @rmdir( $dirName )){} ;  
}  
}  
	delDirAndFile( '../install');  
echo "ok|ok";
	
?>