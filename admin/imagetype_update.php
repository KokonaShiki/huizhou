<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>编辑商品类别</title>
</head>
<body style="width:1024px; text-align:center;background:#F96;margin:0px 0px 0px 0px;">  
<form action="action/imagetype_update_do.php" method="post" >
<?   
if($_GET["PT_ID"] !="" )
{
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
  $ntid= $_GET["PT_ID"];  //获取传递的类别编号
  $str = "select * from Product_Type where PT_ID=".$ntid;  //查询语句
  $arr = mysql_query($str);  //执行SQL语句
  $result = mysql_fetch_array($arr);  //获取查询结果   
  $parentid2 = $result["PT_ParentID"]; //将父级类别编号赋值给变量$parentid2,用于定位所属类别下拉框的选中项
?>
<div  style="text-align:center; margin-left:400px;">
  <div  style=" width:500px;  height:40px;">
  <div  style=" font-size:26px; color:#C33;"colspan="2" align="center">编辑商品类别 </div>
  </div>
  <div  style=" width:500px;  height:25px;">
  <div style="float:left;"><font color="red">*</font>父级类别</div>
  <div style="float:left; margin-left:100px;"><?php include 'select_producttype2.php';?></div>
  </div>
  <div  style=" width:500px;  height:25px;">
  <div style="float:left;"><font color="red">*</font>类别名称</div>
  <div style="float:left; margin-left:100px;"><input type="text" name="txt_name"  value="<? echo $result['PT_Name'] ?>"/></div>
  </div>
  <div style=" width:500px;  height:150px;">
  <div style="float:left; margin-top:50px;">简介： </div>
  <div style="float:left; margin-left:100px;"><textarea name="txt_intro" rows="8" cols="30"><? echo $result['PT_Intro'] ?></textarea></div>
  </div>
  <div style=" width:500px;  height:30px;">
     <div colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<? echo $result['PT_ID'] ?>"/>
       <input type="submit" value="保存"/>
     </div>
  </div>
</div>
<?php 
 }
 else 
 {
   echo "<script>alert('请选择要编辑的商品类别！');window.location.href='imagetype_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>