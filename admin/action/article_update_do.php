 <?php   
  /*文章信息修改处理页 */  
  require_once("../../conn/Conn_DB.php");  
  if($_POST["txt_name"]!= ""&& ($_FILES["txt_image"]!= "" ))
  {
   $pid = $_POST["txt_id"];           //文章编号
   $ptid = $_POST["txt_parentid"];    //类别编号
   $name  = $_POST["txt_name"];       //文章名称
   $name1  = $_POST["txt_name1"];       //文章简介1
   $name3  = $_POST["txt_name2"];       //文章简介2
   $image = $_FILES["txt_image"];     //文章
   $intro = $_POST["txt_intro"];      //介绍

   $createtime = date('Y-m-d H:i:s'); //发布时间

   if($image['name']!= '')  //如果有选择文章，则使用新文章
   { 
     //上传文章
     if($image['size'] > 0 && $image['size'] < 1024 * 8000)
     {
	   $dir = '../../upload/article/';           //设置保存目录
	   $name2 = $image['name'];     //获取上传文件的文件名
	   $rand = rand(0,8000000);  //生成一个从0到8000000之间的随机数
	   $name2 = $rand.date('YmdHis').$name2;  //重新组合文件名
	   $path = $dir.$name2;   //组合成完整的保存路径（目录+文件名）
	   if(!is_dir($dir))    //如果没有该目录
	   {
		 mkdir($dir);    //则创建该目录
	   }
	   $i= move_uploaded_file($image['tmp_name'],$path);  //复制文件，实现上传功能
	   if($i == true)  //如果上传成功给出提示
	   {
		 $path = substr($path,6,strlen($path)-6);
	   }
	   else
	   {
		 echo "<script>alert('文件上传失败');</script>";
	   }
     }
     else 
     {
  	   echo"<script>alert('文件大小不符合网站要求')</script>";  	
     }
   }
   else //如果没有选择文章，则使用原文章
   {
  	 $path = $image2;
   }
   $str = "update article/_Info set PT_ID=$ptid,P_Name='$name',P_Name1='$name1',P_Name2='$name3',P_Image='$path',P_Intro='$intro',P_CreateTime='$createtime' where P_ID=".$pid;
   // echo $str; //本语句用于调试，输出查询语句
   $update = mysql_query($str);  //执行SQL语句
   echo mysql_error();           //本语句用于调试，输出错误信息
   if( $update )                 //判断执行结果
   {
	 echo "<script>alert('文章信息修改成功！'); window.location='../article_manager.php';</script>";
   }
   else
   {
	 echo "<script>alert('文章信息修改失败！'); window.location='../article_update.php?P_ID=".$pid."';</script>";
   }	
 }
 else
 {
   echo "<script>alert('请填写文章名称、文章信息！'); window.location='../article_update.php?P_ID=".$pid."';</script>";
 }
 ?>