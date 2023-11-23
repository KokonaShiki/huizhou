<?php 
 /* 图像类别添加处理页 */
  require_once("../../conn/Conn_DB.php");   //包含数据库链接文件
 if( $_POST["txt_name"]!= "" )  //判断类别名称 是否为空
 {
  $name = $_POST["txt_name"];       //类别名称
  $parentid = $_POST["txt_parentid"];//父级编号
  $intro = $_POST["txt_intro"];     //类别简介
  $str = "insert into product_Type (PT_ParentID,PT_Name,PT_Intro) values($parentid,'{$name}','{$intro}')";  //插入语句
  $insert = mysql_query($str); //执行SQL语句
  if($insert)                  //判断执行结果
  {
    echo "<script>alert('图像类别添加成功！');window.location.href='../imagetype_add.php'</script>";
  }
  else
  {
    echo "<script>alert('图像类别添加失败！');window.location.href='../imagetype_add.php'</script>";
  }
 }
 else 
 {
   echo "<script>alert('请输入图像类别名称！');window.location.href='../imagetype_add.php'</script>";     
 }
 ?>