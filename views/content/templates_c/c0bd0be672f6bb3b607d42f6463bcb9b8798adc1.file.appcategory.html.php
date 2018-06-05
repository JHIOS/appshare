<?php /* Smarty version Smarty-3.1.18, created on 2017-01-06 01:51:26
         compiled from "./../content/themes/material/appcategory.html" */ ?>
<?php /*%%SmartyHeaderCode:1565667953586b4cea334349-44615317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0bd0be672f6bb3b607d42f6463bcb9b8798adc1' => 
    array (
      0 => './../content/themes/material/appcategory.html',
      1 => 1483667483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1565667953586b4cea334349-44615317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_586b4cea5ac415_39586657',
  'variables' => 
  array (
    'tit' => 0,
    'head' => 0,
    'zzurl' => 0,
    'isVisitor' => 0,
    'userinfo' => 0,
    'filedata' => 0,
    'jilu' => 0,
    'pre' => 0,
    'fy' => 0,
    'ne' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586b4cea5ac415_39586657')) {function content_586b4cea5ac415_39586657($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

<title>应用管理 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

<style type="text/css">
</style>
<div class="container">
    <div class="well bs-component">
        <h1>应用管理</h1>

        <link href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/css/pgyer.css" rel="stylesheet">
        <table class="table table-striped table-hover text-center myapps my_history pgy-table">
        <tbody><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['category'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['category']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['filedata']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['name'] = 'category';
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['category']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['category']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['category']['total']);
?>
        <tr class="my_history_row" appid="<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['ckey'];?>
" type="1">
        <td class="clickable" style="width:100px;">
        <img src="../plist/<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['icon'];?>
" class="appicon_s" onerror="javascript:this.src='../plist/default-icon.png';" style="margin-left:10px;" />
        </td>
        <td class="clickable text-left">
        <div>
        <a href="appdetail.php?key=<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['ckey'];?>
" class="appTitle"><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['category'];?>
</a>

            <?php if ($_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['type']=='ipa') {?>
                <span class="label-info label-ios"><i class="fa fa-apple" aria-hidden="true"></i> iOS </span>
            <?php } else { ?>
                <span class="label label-android"><i class="fa fa-android" aria-hidden="true"></i> Andriod </span>
            <?php }?>

        <span class="icon-link" style="margin:4px 7px 0 7px;font-size:12px;"></span>

        </div>
        <div class="version-info">
        <span>
        <i aria-hidden="true" class="fa fa-code-fork"></i>
        <?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['nversion'];?>

        </span>

        <span>
        <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['lasttime'];?>
</span>

        </div>
        </td>


        <td nowrap style="width:200px;padding-right:20px;" class="text-right">
        <span class="option-items">
        <a href="javascript:void(0);" class="popovers"  style="color:#555" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content='<img style="margin-top:0px;margin-bottom:14px;border-radius:0;border:none" class="appicon" src="https://static.pgyer.com/app/qrcode/xj5n" />' data-original-title="" data-html='true' title="扫描二维码下载">
        <i class="fa fa-qrcode" aria-hidden="true" style="color:#1ABC9C;"></i>
        </a>
        </span>
        <span class="option-items">
        <a href="/my/appEdit/de69da92479231cd6715eb663b7c4ee0">
        <i class="fa fa-edit" aria-hidden="true"></i>
        </a>
        </span>

        <div class="btn-group">
        <a id="menu" href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> </a>
        <ul class="dropdown-menu dropdown-menu-right re_min">
            <li><a target="_blank" href="appdetail.php?key=<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['category']['index']]['ckey'];?>
"><i class="fa fa-eye"></i> 查看应用</a></li>
            <li><a href="/my/appEdit/de69da92479231cd6715eb663b7c4ee0"><i class="fa fa-edit"></i> 编辑应用</a></li>
            <li><a href="/my/appEdit/de69da92479231cd6715eb663b7c4ee0"><i class="fa fa-edit"></i> 删除应用</a></li>
        </ul>
        </div>
        </td>


            <td><?php endfor; else: ?> <?php endif; ?></td>
        </tr>
        </tbody>
        </table>



        <div class="row">
            <div class="col-md-6"><br><?php echo $_smarty_tpl->tpl_vars['jilu']->value;?>
</div>
            <div class="col-md-6"><nav>
                <ul class="pagination pagination-sm"style="float:right;">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <?php echo $_smarty_tpl->tpl_vars['fy']->value;?>


                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ne']->value;?>
" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav></div>
        </div>
    </div><?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titm'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/ZeroClipboard.js"></script>
    <script language="JavaScript">
        $("a[href='#").parent().addClass("active");
    </script>
<?php }} ?>
