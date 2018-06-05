<?php

error_reporting(0);//设置错误级别0

require_once("../config.php");//引入配置文件
require_once('../includes/function.php');//引入函数库
require_once("../includes/connect.php");
require_once("../includes/usercheck.php");
$title="上传方案";
require_once("common/head.php");

$result = mysqli_query($con,"SELECT * FROM sd_ipa");//获取数据
while($row = mysqli_fetch_assoc($result))
  { 
$tit= $row['main_tit'];
$tit1= $row['tit_2'];
$theme= $row['theme'];
$des= $row['desword'];
$kw= $row['keyword'];
$notice= $row['notice'];
$tjcode= $row['tjcode'];
}
?>
<body>

      <link href="css/form.css" rel="stylesheet">
        <div id="page-wrapper">
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">IPA包列表</h1>
                    <div id="gg"></div>
                    <div class="alert alert-info" role="alert"> 
					请对应设置好的IPA包进行上传，否则将会出现闪退，无法安装等情况！<br>
					<strong>设置后的包名不可删除</strong>
				
					
					</div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="table-responsive">
             <br>
             <table class="table table-striped table-bordered table-hover">
              <thead>
               <tr>
                  <th>ID</th>
                   <th>应用包名</th>
                   <th style="text-align:center">图片</th>
                   <th>签名对应</th>
                    <th>APP Ids</th>
                     <th>版本号</th>
                     <th>上传次数</th>
                     <th>操作</th>
           
                   </tr>
                 </thead>
               <tbody>
        
<?php
$line="SELECT * FROM `sd_ipa`  ORDER BY `id` DESC";
 $query=mysqli_query($con,$line);
  while($row=mysqli_fetch_assoc($query)){
    $pid = $row['bname'];
 
 $wenjian="SELECT * FROM `sd_file` WHERE `filename` = '$pid'";
$wenjian_res=mysqli_query($con,$wenjian);
$wj=mysqli_num_rows($wenjian_res);
    echo '<tr>
<td>'.$row['id'].'</td>
<td>'.$row['bname'].'</td>
<td style="text-align:center"><a href="'.$row['imgurl'].'" target="_blank"><img src="'.$row['imgurl'].'" width=50	></a></td>
<td>'.$row['resign'].'</td>
<td>'.$row['ids'].'</td>
<td>'.$row['ver'].'</td>
<td>'.$wj.'个</td>
<td><button onclick="delipabao(\''.$row['id'].'\');"class="btn btn-danger">删除</button></td>

 
    ';

  }
?>

                      </tbody></table>

            
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

$.post("../includes/adminAction.php", $("#setting").serialize()+"&action=savesetting",
   function(data){
	var ge=data.split("|");
	if(ge[0]=="bad"){ 
	alert("保存失败，错误信息："+ge[1]);
	}else if (ge[0]=="ok"){ 
iosOverlay({
		text: "保存成功",
		duration: 2e3,
		icon: "./../content/themes/default/images/check.png"
	});
	
	}
   });
}
$(function () {
  $('[data-toggle="popover"]').popover()
})
function showinfo(id){
    if($('#p'+id).is(':hidden')){
        $('#p'+id).show();
    }else{
        $('#p'+id).hide();
    }

}
function delipabao(id){

  $.post("../includes/adminAction.php",{id: id,action: "delipabao"},
  function(data){
    var pe=data.split(".");
    if(pe[0]=="ok"){ 
alert(pe[1]);
window.location.reload();
    }else{ 
alert(pe[1]);


 };

});
}
</script>