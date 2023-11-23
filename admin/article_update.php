<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>编辑文章信息</title>
</head>
<body style="width:1024px; text-align:center; background:#F96;margin:0px 0px 0px 0px;">  
<form action="action/article_update_do.php" method="post"  enctype="multipart/form-data">
<?   
 if($_GET["P_ID"] != "" )
 {
   require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
   $pid= $_GET["P_ID"];    //获取传递的文章编号 
   $str = "select * from article_Info where P_ID=".$pid; //查询语句
   $arr = mysql_query($str);  //执行SQL语句
   $result = mysql_fetch_array($arr);  //获取查询结果 
   $parentid2 = $result['PT_Id'];  //将类别编号赋值给变量$parentid2,用于定位所属类别下拉框的选中项
?>
<div style="text-align:center;width:500px; margin-left:350px;">
<div border="1" width="100%">
  <div style=" width:500px;  height:40px;"><div  style=" font-size:26px; margin-top:20px; color:#C33;">编辑文章信息  </div></div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>所属类别</div>
     <div style="float:left; margin-left:112px;"><?php include 'select_producttype3.php';?></div>
  </div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>文章名称：</div>
     <div style="float:left; margin-left:100px;""><input type="text" name="txt_name" value="<? echo $result['P_Name'] ?>"/></div>
  </div>
  <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>文章简介1：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name1"/></div>
  </div>
   <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>文章简介2：</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name2"/></div>
  </div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>图像文章：</div>
     <div style="float:left; margin-left:100px;""><input type="file" name="txt_image"/></div>
  </div>
  <div style=" width:500px;  height:100px;">
     <div style="float:left; margin-top:50px;">简介：</div>
     <div style="float:left; margin-left:60px;"">
      <textarea name="txt_intro" rows="8" cols="30"><? echo $result['P_Intro'] ?></textarea>
      <img src='../<? echo $result["P_Image"];?>' width="130" height="130"/>
      <input type="hidden" name="txt_image2"  value='<? echo $result["P_Image"];?>'/>
     </div>
  </div>
  <div style=" width:500px;  height:30px;">
     <div colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<? echo $result['P_ID'] ?>"/>
       <input type="submit" value="保存"/>
     </div>
  </div>
</div>
</div>
<?php 
 }
 else 
 {
   echo "<script>alert('请选择要编辑的文章信息！');window.location.href='article_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>