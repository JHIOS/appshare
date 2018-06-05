<?php

error_reporting(0);//设置错误级别0

require_once("../config.php");//引入配置文件
require_once('../includes/function.php');//引入函数库
require_once("../includes/connect.php");
require_once("../includes/usercheck.php");
$title="创建对应IPA信息";
require_once("common/head.php");

$result = mysqli_query($con,"SELECT * FROM sd_setting");//获取数据
while($row = mysqli_fetch_assoc($result))
  { 
$tit= $row['main_tit'];
$tit1= $row['tit_2'];
$theme= $row['theme'];
$des= $row['desword'];
$kw= $row['keyword'];
$notice= $row['notice'];
$tjcode= $row['tjcode'];
$zzurl= $row['zzurl'];
}
?>
<body>

      <link href="css/form.css" rel="stylesheet">
	  
	  
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">IPA包设置</h1>
                    <div id="gg"></div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
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
             <!-- /.row -->
                <div style="height:20px;"></div>
            <div class="row">
                <div class="col-lg-2" align="right">
   
                    </div>
                 <div class="col-lg-5" align="left">
           <button class="btn btn-lg btn-primary" onClick="save();">保存更改</button>
                    </div>
                    <div class="col-lg-3" align="right">
        
                    </div>
              
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


</body>

</html>
<script>
function save(){

$.post("../includes/adminAction.php", $("#setting").serialize()+"&action=ipa",
   function(data){
	var ge=data.split("|");
	if(ge[0]=="bad"){ 
	alert("保存失败，错误信息："+ge[1]);
	}else if (ge[0]=="ok"){ 
iosOverlay({
		text: "保存成功",
		duration: 2e3,
		icon: "images/check.png"
	});
	
	}
   });
}

</script>