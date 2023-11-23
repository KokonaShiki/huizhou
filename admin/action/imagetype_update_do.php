<?php 
/* 图像类别修改处理页 */
  require_once("../../conn/Conn_DB.php");  //包含数据库链接文件  
  if( $_POST["txt_name"]!= "" )   //判断类别名称 是否为空
  {
 	$ptid = $_POST["txt_id"];        //类别编号
    $name = $_POST["txt_name"];       //类别名称
    $parentid = $_POST["txt_parentid"];//父级编号
    $intro = $_POST["txt_intro"];     //类别简介
    $str = "update Product_Type set PT_ParentID=$parentid,PT_Name='$name',PT_Intro='$intro' where PT_ID=".$ptid;  //更新语句
    $update = mysql_query($str); //执行SQL语句
    if($update)                  //判断执行结果
    {
  	  echo "<script>alert('图像类别修改成功！');window.location.href='../imagetype_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('图像类别修改失败！');window.location.href='../imagetype_update.php?PT_ID=".$ptid."'</script>";
    }  
  }
  else 
  {
    echo "<script>alert('请输入图像类别名称！');window.location.href='../imagetype_update.php?PT_ID=".$ptid."'</script>";     
  }
 ?>