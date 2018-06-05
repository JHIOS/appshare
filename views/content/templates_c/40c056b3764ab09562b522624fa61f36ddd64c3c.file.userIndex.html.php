<?php /* Smarty version Smarty-3.1.18, created on 2017-01-04 01:43:49
         compiled from "./../content/themes/material/userIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:885307484586c535550ce36-13705019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40c056b3764ab09562b522624fa61f36ddd64c3c' => 
    array (
      0 => './../content/themes/material/userIndex.html',
      1 => 1465214698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '885307484586c535550ce36-13705019',
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
    'mailhash' => 0,
    'filenum' => 0,
    'sharenum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_586c535574c234_22477903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c535574c234_22477903')) {function content_586c535574c234_22477903($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>


<title>个人详情 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

<style type="text/css">

</style>
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<br><br><br>
<div class="well bs-component"style="padding: 0px;">
<div class="uhead" align="center">
<div class="gravatar">
  <img src="https://secure.gravatar.com/avatar/<?php echo $_smarty_tpl->tpl_vars['mailhash']->value;?>
?s=80&r=g"  class="img-circle"><div class="info"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
</div>
  </div>
</div>
<div class="pcontent">
<div class="row">
<br>
<div class="col-xs-4" align="center"><h1><?php echo $_smarty_tpl->tpl_vars['filenum']->value;?>
</h1><span class="label label-primary">我的文件</span></div>
<div class="col-xs-4"align="center"><h1><?php echo $_smarty_tpl->tpl_vars['sharenum']->value;?>
</h1><span class="label label-info">我的分享</span></div>
<div class="col-xs-4"align="center"><h1><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['uid'];?>
</h1><span class="label label-danger">用户序号</span></div>
</div>
<br>
</div>
<div style="margin-left: 2px;margin-right: 2px;" align="center">
<a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
views/userPassWord.php" class="do btn btn-raised btn-default btn-lg ">修改密码</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
includes/userAction.php?action=logout" class="do dow btn-raised btn btn-default btn-lg ">退出登陆</a>

</div>

        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
    <br><br><br>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titm'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/ZeroClipboard.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/login.js"></script> 
<?php }} ?>
