<?php /* Smarty version Smarty-3.1.18, created on 2017-01-05 05:11:23
         compiled from "./../content/themes/material/merge.html" */ ?>
<?php /*%%SmartyHeaderCode:216560742586c998327d832-50872585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7902b8e928195d65323fa329364513ed96a7f7' => 
    array (
      0 => './../content/themes/material/merge.html',
      1 => 1483593079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216560742586c998327d832-50872585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_586c9983463229_68614761',
  'variables' => 
  array (
    'appname' => 0,
    'type' => 0,
    'zzurl' => 0,
    'ckey' => 0,
    'downurl' => 0,
    'icon' => 0,
    'mkey' => 0,
    'mdownurl' => 0,
    'micon' => 0,
    'mappname' => 0,
    'mtype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586c9983463229_68614761')) {function content_586c9983463229_68614761($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>用友金融 - 合并应用</title>
        <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="https://static.pgyer.com/static-20170104/assets/img/favicon.ico" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/css/style.css" />

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/plugins/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/plugins/horizontal-parallax/css/horizontal-parallax.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/css/themes/default.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/css/custom.css">
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/css/menu.css">


    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css">
    <link href="https://static.pgyer.com/static-20170104/lightbox/css/lightbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/css/my.css" />
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/css/dashboard.css" />
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/css/merge.css" />
    <link rel="stylesheet" href="https://static.pgyer.com/static-20170104/assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css">
    <style>
       .ibox-content .appicon {
            width: 90px;
            height: 90px;
        }
        .error {
            color:red;
        }
    </style>
</head>	

<body>

<style>
.ticket-manager-dropdown-menu::before{
    left:75px;
}
.ticket-manager-dropdown-menu::after{
    left:76px;
}

.user-manager-dropdown-menu::before{
    left:35px;
}
.user-manager-dropdown-menu::after{
    left:36px;
}
.ticket-link {
    background:#fff;
}

.user-manager-dropdown-menu{
    left:54px;
}

@media (min-width: 1200px){
    .user-manager-dropdown-menu{
        left:532px;
    }
    .ticket-manager-dropdown-menu{
        left:680px;
    }

    .ticket-manager-dropdown-menu::before{
        left:35px;
    }
    .ticket-manager-dropdown-menu::after{
        left:36px;
    }

}

@media (min-width: 972px) and (max-width:1199px) {
    .user-manager-dropdown-menu{
        left:510px;
        top:34px;
    }
    .ticket-manager-dropdown-menu{
        top:34px;
        left:510px;
    }

    .ticket-manager-dropdown-menu::before{
        left:35px;
    }
    .ticket-manager-dropdown-menu::after{
        left:36px;
    }

}
@media (min-width: 500px) and (max-width:972px) {
    .user-manager-dropdown-menu{
        left:54px;
        top:34px;
    }
    .ticket-manager-dropdown-menu{
        top:34px;
        left:54px;
    }
}


@media (min-width: 920px) and (max-width:1199px) {
    .user-manager-dropdown-menu{
        left:486px;
    }
 
    .ticket-manager-dropdown-menu::before{
        left:75px;
    }
    .ticket-manager-dropdown-menu::after{
        left:76px;
    }
}

.user-certification {
    color:#56bc94;
}
.user-general {
    color:#ccc;
}
.topbar ul.loginbar li .user-general a {
    color:#ccc;
}
</style>

<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs">
    <div class="container">
        <div class="pull-left">
        <h1><?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
                     <span style="font-size:16px;padding-left:5px;">
            <?php if ($_smarty_tpl->tpl_vars['type']->value=='ipa') {?>
            iOS
            <?php } else { ?>
            Android
            <?php }?>

        </span>
                <a  id="otherAppList" href="javascript:void(0)" onclick="manager.getAppList();" style="" class="dropdown-toggle" role="button" aria-expanded="false">
           <i id="downBtn" class="fa fa-chevron-circle-down" style="color: rgb(142, 159, 160);font-size:16px"></i>
        </a>
            <i id="l_view" class="fa fa-spinner fa-spin hide"></i>
            <ul class="nav navbar-nav" style="margin-left:0px;margin-right:0px;" >
                <li role="presentation" class="dropdown" id="dropdown">
                <ul id="otherAppListShow" class="dropdown-menu sdk-dropdown-menu" role="menu" aria-labelledby="otherAppList" >
                </ul>
                </li>
            </ul>
        </h1>
        </div>
    </div>
    <!--/container-->
    <!--=== Header ===-->
    <div class="header">
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
           </div>


        </div>
    </div>
    </div>
    <!-- End Navbar -->

</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">

    <div class="row margin-bottom-20">
        <div class="col-md-6">
            <a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
views/appdetail.php?key=<?php echo $_smarty_tpl->tpl_vars['ckey']->value;?>
"><i class="fa fa-angle-double-left"></i> 返回应用</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="tab-v1 margin-bottom-60">
                <div class="tab-content sky-form">
                    
                    <div class="row" style="padding:50px;">
                        <div class="col-md-5 text-center">
                            <div class="funny-boxes-img">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['downurl']->value;?>
" target="_blank">
                                     <img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" class="appicon" onerror="javascript:this.src='../plist/default-icon.png';" style='margin-top:0px;margin-bottom:14px;' /></a>
                                    <p class="text-center app-name">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['downurl']->value;?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['appname']->value;?>

                                        </a>
                                    </p>
                                    <p class="text-center app-name">
                                        <?php if ($_smarty_tpl->tpl_vars['type']->value=='ipa') {?>
                                        <span class="ios">iOS</span>
                                        <?php } else { ?>
                                        <span class="and">Android</span>
                                        <?php }?>
                                    </p>
                            </div>

                        </div>
                        <div class="col-md-2 text-center">
                        <span aria-hidden="true" class="icon-link" style="line-height:118px;font-size:30px;"></span>
                        </div>
                        <div class="col-md-5 text-center">
                            <?php if ($_smarty_tpl->tpl_vars['mkey']->value==null) {?>
                            <a href="javascript:void(0)" onclick="openSelApp()" onmouseover="$('#add-merge').attr('src','../content/themes/material/pgyer/image/app_add.png')" onmouseout="$('#add-merge').attr('src','../content/themes/material/pgyer/image/app_add.png')">
                                <div class="text-center" style="margin:auto;">
                                    <img src="../content/themes/material/pgyer/image/app_add.png" id="add-merge" />
                                </div>
                            </a>
                            <p class="text-center app-name">选择需要合并的应用</p>
                            <?php } else { ?>

                            <div class="funny-boxes-img">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['mdownurl']->value;?>
" target="_blank">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['micon']->value;?>
" class="appicon" onerror="javascript:this.src='../plist/default-icon.png';" style='margin-top:0px;margin-bottom:14px;' /></a>
                                <p class="text-center app-name">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['downurl']->value;?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['mappname']->value;?>

                                    </a>
                                </p>
                                <p class="text-center app-name">
                                    <?php if ($_smarty_tpl->tpl_vars['mtype']->value=='ipa') {?>
                                    <span class="ios">iOS</span>
                                    <?php } else { ?>
                                    <span class="and">Android</span>
                                    <?php }?>
                                </p>
                            </div>




                            <?php }?>


                        </div>
                    </div>
                                        <div class="row">
                        <div class="hr-line-dashed"></div>
                        <?php if ($_smarty_tpl->tpl_vars['mkey']->value!=null) {?>
                            <div class="text-center">
                                <button class="btn-u" id="btnUnMerge" onclick="unMerge('<?php echo $_smarty_tpl->tpl_vars['ckey']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['mkey']->value;?>
')">解除合并</button>
                            </div>
                                            <?php }?>
                    </div>
                    <div class="row" style="padding:20px 50px 50px 50px;">
                        <div class="col-md-10 col-md-offset-1">
                        <p>温馨提示：</p>
                        <p>合并后的两个应用，进入任一个应用的单页，扫描二维码，会根据你的手机系统自动帮你下载相应的版本。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        </div>
        <!--End Striped Rows-->
    </div>


</div><!--/container-->
<!--=== End Content Part ===-->
<div class="modal inmodal fade" id="selApp" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header task-sel-app-modal-header">
                    <h4 class="modal-title">选择 App</h4>
                </div>
                <form id="selForm" >
                    <input type="hidden" id="ckey" name="key" value="<?php echo $_smarty_tpl->tpl_vars['ckey']->value;?>
" />
                    <input type="hidden" id="model" name="model" value="merge" />


                    <div class="modal-body task-sel-app-modal-body" style="padding-top:5px;">
                    <div class="panel-body">
                        <div data-toggle="buttons" class="btn-group" style="float: left; width:100%; border-bottom:2px solid #eee;" >
                            <ul class="nav nav-tabs merge-type-tabs">
                                <li class="active" mType="app"><a aria-expanded="true" data-toggle="tab" href="#tab-1">我上传的应用</a></li>

                            </ul>
                        </div> 
                        <div class="tab-content" style="padding-top: 80px;">
                            <div id="tab-1" class="tab-pane active" mType="app">
                                <div class="row" style="height:340px; overflow-y:auto;overflow-x:hidden">
                                    <div class="wrapper wrapper-content" style="padding-bottom:0px;">
                                        <div id="loading" class="hide">
                                            <div class="sk-spinner sk-spinner-wandering-cubes">
                                                <div class="sk-cube1"></div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1" id="appContainer">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <input type="hidden" id="mAKey" name="mAKey" value="" />
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a  data-dismiss="modal" href="javascript:void(0)" style="padding-right:10px;">取消</a>
                    <button type="submit" id="btnSelApp" class="btn btn-u">合并应用</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<!-- JS Global Compulsory -->

<script type="text/javascript" src="https://static.pgyer.com/static-20170104/assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://static.pgyer.com/static-20170104/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
pgyManageOptions = {
    "agKey": 'de69da92479231cd6715eb663b7c4ee0',
    "appiconHost": 'https://o1wh05aeh.qnssl.com'
};
(function($){  
    $.fn.wordLimit = function(num){   
        this.each(function(){     
            if(!num){  
                var copyThis = $(this.cloneNode(true)).hide().css({  
                    'position': 'absolute',  
                    'width': 'auto',  
                    'overflow': 'visible'  
                });   
                $(this).after(copyThis);  
                if(copyThis.width()>$(this).width()){  
                    $(this).text($(this).text().substring(0,$(this).text().length-4));  
                    $(this).html($(this).html()+'...');  
                    copyThis.remove();  
                    $(this).wordLimit();  
                }else{  
                    copyThis.remove(); //清除复制  
                    return;  
                }     
            }else{  
                var maxwidth=num;  
                if($(this).text().length>maxwidth){  
                    $(this).text($(this).text().substring(0,maxwidth));  
                    $(this).html($(this).html()+'...');  
                }  
            }                      
        });  
    }           
})(jQuery);  
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        manager.init();
     });

</script>
<script src="https://static.pgyer.com/static-20170104/assets/plugins/sky-forms/version-2.0.1/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://static.pgyer.com/static-20170104/lightbox/js/lightbox.js"></script> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
content/themes/material/pgyer/js/merge_app.js"></script>

<script type="text/javascript">
pgyOptions = {
    "appId": 'de69da92479231cd6715eb663b7c4ee0'
};
</script>

<!-- JS Page Level -->
<script type="text/javascript">
    var type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
'
    var agKey = $("#agKey").val();
    var url='<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
'
    var shortcutMin = '最小长度为4';
    var shortcutError = '短链接由4个或4个以上字母数字组成';
    var shortcutCheck = '请输入短链接';
    var mAKeyCheck = '请选择需要合并的APP';
    var addMergeBtn = '合并应用';
    var addingMergeBtn = '正在合并';
    var unMergeComfirm = '确定解除合并应用？';
    var unMergeBtn = '解除合并';
    var doingunmergebtn = '正在解除';
    var agreeMergeBtn = '同意合并';
    var unagreeMergeBtn = '拒绝合并';
    var doingUnagreeMergeBtn = '正在处理';
    var cancelMergeBtn = '取消邀请';
    var doingCancelMergeBtn = '正在取消';


    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<![endif]-->

</body>
</html>
<?php }} ?>
