 <?php   
  /*������Ϣ�޸Ĵ���ҳ */  
  require_once("../../conn/Conn_DB.php");  
  if($_POST["txt_name"]!= ""&& ($_FILES["txt_image"]!= "" ))
  {
   $pid = $_POST["txt_id"];           //���±��
   $ptid = $_POST["txt_parentid"];    //�����
   $name  = $_POST["txt_name"];       //��������
   $name1  = $_POST["txt_name1"];       //���¼��1
   $name3  = $_POST["txt_name2"];       //���¼��2
   $image = $_FILES["txt_image"];     //����
   $intro = $_POST["txt_intro"];      //����

   $createtime = date('Y-m-d H:i:s'); //����ʱ��

   if($image['name']!= '')  //�����ѡ�����£���ʹ��������
   { 
     //�ϴ�����
     if($image['size'] > 0 && $image['size'] < 1024 * 8000)
     {
	   $dir = '../../upload/article/';           //���ñ���Ŀ¼
	   $name2 = $image['name'];     //��ȡ�ϴ��ļ����ļ���
	   $rand = rand(0,8000000);  //����һ����0��8000000֮��������
	   $name2 = $rand.date('YmdHis').$name2;  //��������ļ���
	   $path = $dir.$name2;   //��ϳ������ı���·����Ŀ¼+�ļ�����
	   if(!is_dir($dir))    //���û�и�Ŀ¼
	   {
		 mkdir($dir);    //�򴴽���Ŀ¼
	   }
	   $i= move_uploaded_file($image['tmp_name'],$path);  //�����ļ���ʵ���ϴ�����
	   if($i == true)  //����ϴ��ɹ�������ʾ
	   {
		 $path = substr($path,6,strlen($path)-6);
	   }
	   else
	   {
		 echo "<script>alert('�ļ��ϴ�ʧ��');</script>";
	   }
     }
     else 
     {
  	   echo"<script>alert('�ļ���С��������վҪ��')</script>";  	
     }
   }
   else //���û��ѡ�����£���ʹ��ԭ����
   {
  	 $path = $image2;
   }
   $str = "update article/_Info set PT_ID=$ptid,P_Name='$name',P_Name1='$name1',P_Name2='$name3',P_Image='$path',P_Intro='$intro',P_CreateTime='$createtime' where P_ID=".$pid;
   // echo $str; //��������ڵ��ԣ������ѯ���
   $update = mysql_query($str);  //ִ��SQL���
   echo mysql_error();           //��������ڵ��ԣ����������Ϣ
   if( $update )                 //�ж�ִ�н��
   {
	 echo "<script>alert('������Ϣ�޸ĳɹ���'); window.location='../article_manager.php';</script>";
   }
   else
   {
	 echo "<script>alert('������Ϣ�޸�ʧ�ܣ�'); window.location='../article_update.php?P_ID=".$pid."';</script>";
   }	
 }
 else
 {
   echo "<script>alert('����д�������ơ�������Ϣ��'); window.location='../article_update.php?P_ID=".$pid."';</script>";
 }
 ?>