
 <?php 
 /* 文章信息添加处理页 */  
  require_once"../../conn/Conn_DB.php";   //包含数据库链接文件
 if($_POST["txt_name"]!="") //判断必填 信息
 {
    $name  = $_POST["txt_name"];       //文章名称
   $intro = $_POST["txt_intro"];      //介绍
   
   $createtime = date('Y-m-d H:i:s'); //发布时间
  $str = "insert into Word_Info (W_Name,W_intro) values ('{$name}','{$intro}')"; 
  $insert = mysql_query($str);         //执行SQL语句
  if($insert)         
  {
  	 echo "<script>alert('恭喜您，文章添加成功！');window.location.href='../main_index.php'</script>";   //跳转到资料信息显示页面
  }
  else
  {
    echo "<script>alert('对不起，文章添加失败！');window.location.href='../word_add.php'</script>";   //跳转文章添加页面 
  }  
 }
 else 
 {
   echo "<script>alert('请输入文章名！');window.location.href='../word_add.php'</script>";     //跳转文章添加页面
 }
 ?>