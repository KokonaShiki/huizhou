<?php 
 /* 文章信息放入回收站处理页 */  
  require_once("../../conn/Conn_DB.php");    //包含数据库链接文件 
  if( $_GET["V_ID"]!= ""  &&  $_GET["Type"]!= "")
  {
    $pid = $_GET["V_ID"];  //获取传递的文章编号
     $type = $_GET["Type"];         //获取传递的操作类型
    $str ="";
    switch ($type)
    {
      case "1":
        $str = "update word_Info set V_Status=1 where V_ID=".$pid;  //更新语句
        break;
      case "2":
        $str = "update word_Info set V_Status=2 where V_ID=".$pid;  //更新语句
        break;      
    }
    $update = mysql_query($str); //执行SQL语句
    if($update)                  //判断执行结果          
    {
      echo "<script>alert('操作成功！');window.location.href='../word_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('操作失败！');window.location.href='../word_manager.php'</script>";
    }
  }
  else 
  {
    echo "<script>alert('请选择要操作的文章信息！');window.location.href='../word_manager.php'</script>";     
  }
 ?>