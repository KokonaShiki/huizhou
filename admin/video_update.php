<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>编辑视频信息</title>
</head>
<body style="width:1024px; text-align:center; background:#F96;margin:0px 0px 0px 0px;">  
<form action="action/video_update_do.php" method="post"  enctype="multipart/form-data">
<?   
 if($_GET["P_ID"] != "" )
 {
   require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
   $pid= $_GET["P_ID"];    //获取传递的视频编号 
   $str = "select * from video_Info where P_ID=".$pid; //查询语句
   $arr = mysql_query($str);  //执行SQL语句
   $result = mysql_fetch_array($arr);  //获取查询结果 
   $parentid2 = $result['PT_Id'];  //将类别编号赋值给变量$parentid2,用于定位所属类别下拉框的选中项
?>
<div style="text-align:center;width:500px; margin-left:350px;">
<div border="1" width="100%">
  <div style=" width:500px;  height:40px;"><div  style=" font-size:26px; margin-top:20px; color:#C33;">编辑视频信息  </div></div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>所属类别</div>
     <div style="float:left; margin-left:112px;"><?php include 'select_producttype3.php';?></div>
  </div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>视频名称：</div>
     <div style="float:left; margin-left:100px;""><input type="text" name="txt_name" value="<? echo $result['P_Name'] ?>"/></div>
  </div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>图像视频：</div>
     <div style="float:left; margin-left:100px;""><input type="file" name="txt_video"/></div>
  </div>
  <div style=" width:500px;  height:100px;">
     <div style="float:left; margin-top:50px;">简介：</div>
     <div style="float:left; margin-left:60px;">
      <textarea name="txt_intro" rows="8" cols="30"><? echo $result['P_Intro'] ?></textarea>
     <div><embed src='../<? echo $result["P_Video"];?>' width="270" height="180" autostart=false loop=true/false></embed></div>
      <input type="hidden" name="txt_Video2"  value='<? echo $result["P_Video"];?>'/>
     </div>
  </div>
  <div style=" width:500px;  height:50px;">
     <div colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<? echo $result['P_ID'] ?>"/>
       <input type="submit" value="保存"/><td style="margin-top:100px"><a href="main_index.php">返回主页</a></td>
     </div>
  </div>
</div>
</div>
<?php 
 }
 else 
 {
   echo "<script>alert('请选择要编辑的视频信息！');window.location.href='video_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>