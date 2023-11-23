<?php 
 /* 图像类别删除处理页 */  
  require_once("../../conn/Conn_DB.php");    //包含数据库链接文件
  if( $_GET["PT_ID"]!= "")
  {
    $ptid = $_GET["PT_ID"];  //获取传递的图像类别编号
    $str = "select * from product_Type where PT_ParentID=".$ptid;  //查询语句
    $arr = mysql_query($str);    //执行SQL语句
    if (mysql_num_rows($arr)>0)  //判断查询结果行数，判断是否含有子类别
    {
      echo "<script>alert('该类别有子类别，请先删除子类别！');window.location.href='../imagetype_manager.php'</script>";
    }
    else 
    {
      $str = "delete from product_Type where PT_ID=".$ptid; //删除语句
      $delete = mysql_query($str); //执行SQL语句
      if($delete)                 //判断执行结果
      {
    	echo "<script>alert('图像类别删除成功！');window.location.href='../imagetype_manager.php'</script>";
      }
      else
      {
        echo "<script>alert('图像类别删除失败！');window.location.href='../imagetype_manager.php'</script>";
      }
    } 
  }
  else 
  {
   echo "<script>alert('请选择要删除的图像类别！');window.location.href='../imagetype_manager.php'</script>";     
  }
 ?>