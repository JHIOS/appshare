<?php /* Smarty version Smarty-3.1.18, created on 2017-01-06 05:11:50
         compiled from "./../content/themes/material/appdetail.html" */ ?>
<?php /*%%SmartyHeaderCode:204932933586b4ce9002b61-28216361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24b8ac182f3efa77c9b55b0ce4c86ca6583bf12c' => 
    array (
      0 => './../content/themes/material/appdetail.html',
      1 => 1483679504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204932933586b4ce9002b61-28216361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_586b4ce92c9e97_64329886',
  'variables' => 
  array (
    'appname' => 0,
    'type' => 0,
    'isVisitor' => 0,
    'zzurl' => 0,
    'ckey' => 0,
    'lasttime' => 0,
    'version' => 0,
    'downurl' => 0,
    'icon' => 0,
    'filedata' => 0,
    'pre' => 0,
    'fy' => 0,
    'ne' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586b4ce92c9e97_64329886')) {function content_586b4ce92c9e97_64329886($_smarty_tpl) {?><title>用友金融 - 概述</title>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./../includes/js/jquery-1.9.1.min.js"></script>

<meta name="keywords" content="用友金融内测平台 pgyer  企业签名 iOS Android 安卓苹果应用测试托管 免费上传内测分发安装 开放SDK CDN">
<meta name="description" content="用友金融 为开发者提供简洁迅速的内测程序分发服务">
<meta property="og:type" content="webpage">
<meta property="og:url" content="https://www.pgyer.com">
<meta property="og:title" content="用友金融">
<meta property="og:description" content="用友金融 为开发者提供简洁迅速的内测程序分发服务">
<meta name="apple-mobile-web-app-title" content="用友金融">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no minimal-ui">

<link rel="dns-prefetch" href="//www.pgyer.com">
<link rel="dns-prefetch" href="//o1wh05aeh.qnssl.com">
<link rel="dns-prefetch" href="//o1whyeemo.qnssl.com">
<link rel="dns-prefetch" href="//static.pgyer.com">


<link rel="shortcut icon" href="https://static.pgyer.com/static-20161125/assets/img/favicon.ico" />

<!-- CSS Global Compulsory-->
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/css/style.css" />

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/plugins/line-icons/line-icons.css">
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/plugins/flexslider/flexslider.css">
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/plugins/bxslider/jquery.bxslider.css">
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/plugins/horizontal-parallax/css/horizontal-parallax.css">

<!-- CSS Theme -->
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/css/themes/default.css" id="style_color">

<!-- CSS Customization -->
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/css/custom.css">
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/css/menu.css">


<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/css/my.css" />
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/css/dashboard.css" />
<link rel="stylesheet" href="https://static.pgyer.com/static-20161125/assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css">
<style>
    .state-error em{
        margin-top: 6px;
        padding: 0 1px;
        font-style: normal;
        font-size: 11px;
        line-height: 15px;
        color: #ee9393;
    }
</style>
</head>

<body>

<!-- Modal -->


<div class="wrapper">
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

                    <?php if ($_smarty_tpl->tpl_vars['type']->value=='ipa') {?>
                    <span style="font-size:16px;padding-left:5px;">iOS</span>
                    <?php } else { ?>
                    <span style="font-size:16px;padding-left:5px;">Android</span>
                    <?php }?>

                    <a  id="otherAppList" href="javascript:void(0)" onclick="getAppList();" style="" class="dropdown-toggle" role="button" aria-expanded="false">
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


                    <!-- Menu -->

                    <div class="collapse navbar-collapse navbar-responsive-collapse" style="padding-right: 0px; margin-right: -30px;">
                        <ul class="nav navbar-nav" style="width: 100%; margin-right: -30px;">
                            <li class="active">
                                <a href="">概述</a>
                            </li>

                        </ul>
                    </div><!--/navbar-collapse-->
                </div>
            </div>
        </div>
        <!-- End Navbar -->

    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content recent" style="padding-top:20px;">

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <?php if ($_smarty_tpl->tpl_vars['isVisitor']->value=="false") {?>
                        <a class="btn-u" href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
"><i class="fa fa-cloud-upload"></i> 上传新版本</a>
                        <a class="btn-u" href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
views/merge.php?key=<?php echo $_smarty_tpl->tpl_vars['ckey']->value;?>
"><span class="icon-link" aria-hidden="true"></span> 合并应用</a>
                        <?php }?>
                    </div>

                </div>

                <div class="margin-bottom-20"></div>

                <div class="row">
                    <div class="funny-boxes funny-boxes-top-sea">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <h2 style="padding-left:15px; padding-right:10px; font-size:20px; float:left;"><?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
                                    </h2>
                                    <span class="icon-link" style="margin:4px 7px 0 -2px;font-size:12px;float:left;"></span>
                                    <span class="label label-info" style="float:left;">
                                        企业版                                        </span>
                                </div>
                                <div class="row">
                                    <h4 style="padding-left:15px;">com.jinrong.Platform</h4>
                                </div>
                                <hr style="margin:10px 0;">
                                <div class="row margin-bottom-10" style='padding-top:10px;'>
                                    <div class="col-md-5">最后更新： <?php echo $_smarty_tpl->tpl_vars['lasttime']->value;?>
</div>
                                    <div class="col-md-5">最新版本：<?php echo $_smarty_tpl->tpl_vars['version']->value;?>

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 funny-boxes-img">
                                <div class="row" >
                                    <div class="col-md-6">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['downurl']->value;?>
" target="_blank">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" class="appicon" onerror="javascript:this.src='../plist/default-icon.png';" style='margin-top:0px;margin-bottom:14px;' /></a>

                                        <p style="width:118px;text-align:center;margin-bottom:0px;"><a href="<?php echo $_smarty_tpl->tpl_vars['downurl']->value;?>
" target="_blank" style="color:#56bc94;">查看应用</a></p>
                                    </div>
                                    <div class="col-md-6">
                                        <img style="margin-top:0px;margin-bottom:14px;border-radius:0;border:none" class="appicon" src="https://pan.baidu.com/share/qrcode?w=260&h=260&url=<?php echo $_smarty_tpl->tpl_vars['downurl']->value;?>
" />
                                        <p style="width:118px;text-align:center;margin-bottom:0px;">扫描二维码下载</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="margin-bottom-20"></div>
                    <!-- version  -->
                    <div class="main-counters margin-bottom-40">
                        <div class="headline"><h2>版本信息</h2></div>
                        <div class="col-md-12">
                            <div class="row">
                                <table class="table text-center pgy-table table-hover ">
                                    <thead>
                                    <tr class="pgy-warning" style="background-color: #f7f7f7;border-top:1px solid #ddd">
                                        <th class="text-center" width="20%">版本</th>
                                        <th class="text-center" width="20%">下载次数</th>
                                        <th class="text-center" width="20%">大小</th>
                                        <th class="text-center" width="20%">最后更新日期</th>
                                        <th class="text-center" width="20%">操作</th>
                                    </tr>
                                    </thead>
                                    <tbody id="version_result"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['app'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['app']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['filedata']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['name'] = 'app';
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['app']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['app']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['app']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['app']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['app']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['app']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['app']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['app']['total']);
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['app']['index']]['version'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['app']['index']]['downloadnum'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['app']['index']]['size'];?>
M</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['app']['index']]['uploadtime'];?>
</td>
                                        <td>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
f.php?k=<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['app']['index']]['sskey'];?>
" class="btn btn-info btn-xs" style="font-size:12px; margin-right:10px;" target="_blank">查看</a>
                                            <?php if ($_smarty_tpl->tpl_vars['isVisitor']->value=="false") {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
data/<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['app']['index']]['ming'];?>
" class="btn btn-info btn-xs" style="font-size:12px; margin-right:10px;">下载</a>
                                            <a  id ="s1" class="btn btn-danger btn-xs" onclick="javascript:deleteApp('<?php echo $_smarty_tpl->tpl_vars['filedata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['app']['index']]['key1'];?>
');" href="javascript:void(0);">
                                                <i class="fa fa-tr ash-o"></i> 删除</a>
                                            <?php }?>
                                        </td>

                                    </tr><?php endfor; else: ?> <?php endif; ?>




                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-6"><br></div>
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="margin-bottom-20"></div>

                <!-- End Counters -->
            </div>
            <!--End Striped Rows-->
        </div>

    </div><!--/container-->


    <!-- JS Implementing Plugins -->
    <script type="text/javascript">
        $('#otherAppList').show();
        var appiconHost='<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
plist/';

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

        function deleteApp(appkey) {
            if (confirm('确实要删除这个应用吗? 删除后，该应用将无法恢复！')) {
                $.post("../includes/delete_file.php", {
                    key: appkey
                }, function(data) {
                    var pe = data.split(".");
                    if (pe[0] == "ok") {
                        $("#s1").removeAttr("disabled");
                        parent.location.reload();
                    } else {

                        alert("删除key:"+key1+"时遇到错误");
                    }
                });

            }
        }

        function getAppList() {
            if ($('#otherAppListShow').hasClass('on')){
                $('#otherAppListShow').hide().html('');
                $('#otherAppListShow').removeClass('on');
                $('#downBtn').addClass('fa-chevron-circle-down').removeClass('fa-chevron-circle-up');
                return;
            }
            $.ajax({
                type : "GET",
                url  : "<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
views/pages.php",
                data : {"id": "categorylist","model":"getapplist" },
                dataType: "json",
                beforeSend: function(xhr) {
                    $('#l_view').removeClass("hide");
                },
                success : function(result, textStatus, jqXHR) {
                    $('#l_view').addClass("hide");
                    var ghtml = '';
                    var url = 'appdetail.php?key=';
                    var width = 260;
                    $.each(result, function(k, item) {
                        ghtml += '<li role="presentation">';

                        if (k == result.length - 1) {
                            ghtml += '<a href="' + url + item.ckey + '"  style="padding-bottom:6px;padding-top:6px;"class="app-list-item last-item" tabindex="-1" role="menuitem">';
                        } else {
                            ghtml += '<a href="' + url + item.ckey + '" style="padding-bottom:6px;padding-top:6px;" class="app-list-item" tabindex="-1" role="menuitem">';
                        }

                        if (item.type == 'ipa') {
                            ghtml += '<span style="float:right;margin-top:5px;padding-right:5px;color:#56bc94"> iOS </span>';
                        } else {
                            ghtml += '<span style="float:right;margin-top:5px;padding-right:5px;color:#56bc94"> Android </span>';
                        }

                        if (item.icon) {
                            ghtml += '<img src=\'' + appiconHost  + item.icon + '\' class=\'appicon_s\' style=\'margin-right:10px;\' />';
                        } else {
                            ghtml += '<img src=\'' + appiconHost + 'default-icon.png\' class=\'appicon_s\' style=\'margin-right:10px;\' />';
                        }

                        ghtml += '<span class=\'otherAppItemName\'>' + item.category + '</span>';
                        ghtml += '</a>';
                        ghtml += '</li>';
                    });

                    $('#otherAppListShow').show().html(ghtml);
                    $('#otherAppListShow').addClass('on');
                    width = $('#otherAppList').parent().width();

                    if (width < 260) { width = 260;}

                    $('#otherAppListShow').width(width);
                    // 根据宽度计算显示字数
                    width = width-40-49-5-40;
                    $('.otherAppItemName').wordLimit(Math.floor(width/14));
                    $('#downBtn').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
                    $("#otherAppList").removeAttr("onclick");
                },
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                    $('#l_view').addClass("hide");
                    alert("服务器错误");
                }
            });
        }


    </script>

    <!--[if lt IE 9]>
    <script src="https://static.pgyer.com/static-20161125/assets/plugins/respond.js"></script>
    <![endif]-->
</div>
</body>

<?php }} ?>
