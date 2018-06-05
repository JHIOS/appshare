<?php /* Smarty version Smarty-3.1.18, created on 2017-01-04 01:44:05
         compiled from "./../content/themes/material/ipa.html" */ ?>
<?php /*%%SmartyHeaderCode:1992629162586c5365c5e8a2-14110861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58278e1d7abd2f14ad3aac985c1cb8e187fc50c' => 
    array (
      0 => './../content/themes/material/ipa.html',
      1 => 1467771934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1992629162586c5365c5e8a2-14110861',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_586c5365dc76d0_16156971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c5365dc76d0_16156971')) {function content_586c5365dc76d0_16156971($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

<title>添加IPA信息 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tit'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

<style type="text/css">
</style>
<div class="container">
    <div class="well bs-component">
        <h1>添加IPA信息</h1>

   <!-- /.row -->
            <form id="setting">
            <div class="row">
                <div class="col-lg-2" align="right">
                 <label class="lab">包名:</label>
                    </div>
                 <div class="col-lg-5" align="right">
                 <input type="text" name="bname"  class="form-control">
                    </div>
                    <div class="col-lg-3" align="right">
                <div class="sm" align="left">IPA下载时显示的名称</div>
                    </div>
              
            </div>
      

   <div style="height:10px;"></div>
            <div class="row">
                <div class="col-lg-2" align="right">
                 <label class="lab">版本号:</label>
                    </div>
                 <div class="col-lg-5" align="right">
                 <input type="text" name="ver"  class="form-control">
                    </div>
                    <div class="col-lg-3" align="right">
                <div class="sm" align="left">版本号:6.3.9.18</div>
                    </div>
              
            </div> 
      <div style="height:10px;"></div>
            <div class="row">
                <div class="col-lg-2" align="right">
                 <label class="lab">签名后名称:</label>
                    </div>
                 <div class="col-lg-5" align="right">
                 <input type="text" name="resign"  class="form-control">
                    </div>
                    <div class="col-lg-3" align="right">
                <div class="sm" align="left">是否有自动生成新的文件名称，如:xxx-resign.ipa</div>
                    </div>
              
            </div>
                            <div style="height:10px;"></div>
            <div class="row">
                <div class="col-lg-2" align="right">
                 <label class="lab">APP IDS:</label>
                    </div>
                 <div class="col-lg-5" align="right">
                 <input type="text"  name="ids" class="form-control">
                    </div>
                    <div class="col-lg-3" align="right">
                <div class="sm" align="left">APP IDS 设置APPID，不同的包，请勿重复，否则将会覆盖安装</div>
                    </div>
              
            </div>

   <div style="height:10px;"></div>
            <div class="row">
                <div class="col-lg-2" align="right">
                 <label class="lab">显示图片:</label>
                    </div>
                 <div class="col-lg-5" align="right">
                 <input type="text" name="imgurl"  class="form-control">
                    </div>
                    <div class="col-lg-3" align="right">
                <div class="sm" align="left">图片地址:http://www.xxx.com/xx.png(jpg,png,gif均可)</div>
                    </div>
              
            </div> 
           
            <!-- /.row -->
               <div style="height:10px;"></div>
            <div class="row">
                <div class="col-lg-2" align="right">
                 <label class="lab">应用介绍:</label>
                    </div>
                 <div class="col-lg-5" align="right">
                 <textarea  name="js" class="form-control"> </textarea>
                    </div>
                    <div class="col-lg-3" align="right">
                <div class="sm" align="left">用于描述应用的介绍性文字</div>
                    </div>
              
            </div>
            <!-- /.row -->
                
           
            <!-- /.row -->        </form>
                         <div style="height:20px;"></div>
            <div class="row">
                <div class="col-lg-2" align="right">
   
                    </div>
                 <div class="col-lg-5" align="left">
           <button class="btn btn-raised btn-primary btn-lg" onClick="save();">保存更改</button>
                    </div>
                    <div class="col-lg-3" align="right">
        
                    </div>
              
    </div><?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('titm'=>$_smarty_tpl->tpl_vars['tit']->value,'head'=>$_smarty_tpl->tpl_vars['head']->value,'zzurl'=>$_smarty_tpl->tpl_vars['zzurl']->value,'isvisitor'=>$_smarty_tpl->tpl_vars['isVisitor']->value,'userinfo'=>$_smarty_tpl->tpl_vars['userinfo']->value), 0);?>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/js/ZeroClipboard.js"></script>
    <script language="JavaScript">
 $("a[href='#").parent().addClass("active");
 function save(){

$.post("../includes/userAction.php", $("#setting").serialize()+"&action=ipa",
   function(data){
  var ge=data.split("|");
  if(ge[0]=="bad"){ 
  alert("保存失败，错误信息："+ge[1]);
  }else if (ge[0]=="ok"){ 
alert("保存成功");
  
  }
   });
}
    </script>
   <?php }} ?>
