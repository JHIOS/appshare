<?php /* Smarty version Smarty-3.1.18, created on 2017-01-05 04:15:21
         compiled from "./../content/themes/material/message_bad.html" */ ?>
<?php /*%%SmartyHeaderCode:488442723586dc859ebe208-07185200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e19d675236aad8bbd1f3ffe87926582e715a907b' => 
    array (
      0 => './../content/themes/material/message_bad.html',
      1 => 1465214698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '488442723586dc859ebe208-07185200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tit' => 0,
    'head' => 0,
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
    'tit2' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_586dc85a095337_92304963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586dc85a095337_92304963')) {function content_586dc85a095337_92304963($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>


<title><?php echo $_smarty_tpl->tpl_vars['tit2']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

<style type="text/css">
    .footer{
            position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;

    }
</style>
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<br><br><br>
<div class="well bs-component" id="loginform">
 <legend>:( 发生了一个错误</legend>
 <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
    <br><br><br>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titm'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/ZeroClipboard.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/login.js"></script> 
<?php }} ?>
