<?php /* Smarty version Smarty-3.1.18, created on 2016-12-19 06:56:35
         compiled from "content/themes/material/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1550839158577693c3cf68-37798960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c275ca1ce8908c3c920145d7beeec8e19254d69' => 
    array (
      0 => 'content/themes/material/footer.html',
      1 => 1465214698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1550839158577693c3cf68-37798960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tit' => 0,
    'jscode' => 0,
    'head' => 0,
    'zzurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58577693c925d8_23279575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58577693c925d8_23279575')) {function content_58577693c925d8_23279575($_smarty_tpl) {?>       <footer class="footer">
      <div class="container">
        <p class="text-muted">  Copyright &copy; <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 echo date('Y'); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>
 </p>
      </div>
    </footer>
<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<script src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/material.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/ripples.min.js"></script>
<script>
  $.material.init();
</script>
  </body>
  </html><?php }} ?>
