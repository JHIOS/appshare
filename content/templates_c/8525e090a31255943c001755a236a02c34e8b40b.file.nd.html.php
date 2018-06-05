<?php /* Smarty version Smarty-3.1.18, created on 2016-12-19 06:23:26
         compiled from "./content/themes/material/nd.html" */ ?>
<?php /*%%SmartyHeaderCode:83312740558577cde812407-81181739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8525e090a31255943c001755a236a02c34e8b40b' => 
    array (
      0 => './content/themes/material/nd.html',
      1 => 1467770956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83312740558577cde812407-81181739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filename' => 0,
    'time' => 0,
    'zzurl' => 0,
    'key' => 0,
    'ver' => 0,
    'imgurl' => 0,
    'num' => 0,
    'body' => 0,
    'urls' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58577cde85e8a3_72518524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58577cde85e8a3_72518524')) {function content_58577cde85e8a3_72518524($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="./content/CSS/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="./content/CSS/css/component.css" />
		<script src="../includes/js/jquery-1.9.1.min.js"></script>
		<script src="./content/CSS/js/modernizr.custom.js"></script>

		<title><?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
</title>
	</head>
	<body>
		<div class="container">
			<div id="splitlayout" class="splitlayout">
				<div class="intro">
					<div class="side side-left">
						<header class="codropsheader clearfix">
							<h1><?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
</h1>
							<div class="demos">
								<span class="current" href="nd2.html"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</span>
							 
							</div>
						</header>
						<div class="intro-content" style="margin-top:-55px;">
						<div><img src="https://pan.baidu.com/share/qrcode?w=260&h=260&url=<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
f.php?k=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="width:160px; height:160px;"></div>
					<h1><span>扫一扫下载 </span><span ><?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
 </span></h1>
						
						</div>
						<div class="overlay"></div>
					</div>
					<div class="side side-right" >
					<div class="intro-content" style="margin-top:-55px;" onclick="download();">
							<div><img src="<?php echo $_smarty_tpl->tpl_vars['imgurl']->value;?>
" style="width:160px; height:160px;" ></div>
							<h1><span>点击安装 </span><span>安装次数:<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
				</div><!-- /intro -->
			 	<div class="page page-right">
					<div class="page-inner">
						<section>
							<h2><?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
</h2>
							<p><?php echo $_smarty_tpl->tpl_vars['body']->value;?>

						</section>
						 
					</div><!-- /page-inner -->
			 </div><!-- /page-right --> 
				<div class="page page-left">
					<div class="page-inner">
						<section>
							<h2>Web Design</h2>
							 
						</section>
					 
					</div><!-- /page-inner -->
				</div><!-- /page-left -->
				<a href="#" class="back back-right" title="back to intro">&rarr;</a>
				<a href="#" class="back back-left" title="back to intro">&larr;</a>
			</div><!-- /splitlayout -->
		</div><!-- /container -->
		<!-- <script src="../content/CSS/js/classie.js"></script>
		<script src="../content/CSS/js/cbpSplitLayout.js"></script> -->
		<script language="JavaScript"> 

function download(){ 
window.open("itms-services:///?action=download-manifest&url=<?php echo $_smarty_tpl->tpl_vars['urls']->value;?>
plist/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
")

   $.get("includes/download.php?sskey=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&type=open",function(data,status){

  }); 
}
</script>
	</body>
</html>
<?php }} ?>
