 <?php   
  /* ͼƬ��Ϣ�޸Ĵ���ҳ */  
  require_once("../../conn/Conn_DB.php");  
  if($_POST["txt_name"]!= ""&& ($_FILES["txt_image"]!= "" ))
  {
   $pid = $_POST["txt_id"];           //ͼƬ���
   $ptid = $_POST["txt_parentid"];    //�����
   $name  = $_POST["txt_name"];       //ͼƬ����
   $image = $_FILES["txt_image"];     //ͼƬ
   $intro = $_POST["txt_intro"];      //����

   $createtime = date('Y-m-d H:i:s'); //����ʱ��

   if($image['name']!= '')  //�����ѡ��ͼƬ����ʹ����ͼƬ
   { 
     //�ϴ�ͼƬ
     if($image['size'] > 0 && $image['size'] < 1024 * 8000)
     {
	   $dir = '../../upload/';           //���ñ���Ŀ¼
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
   else //���û��ѡ��ͼƬ����ʹ��ԭͼƬ
   {
  	 $path = $image2;
   }
   $str = "update Picture_Info set PT_ID=$ptid,P_Name='$name',P_Image='$path',P_Intro='$intro',P_CreateTime='$createtime' where P_ID=".$pid;
   // echo $str; //��������ڵ��ԣ������ѯ���
   $update = mysql_query($str);  //ִ��SQL���
   echo mysql_error();           //��������ڵ��ԣ����������Ϣ
   if( $update )                 //�ж�ִ�н��
   {
	 echo "<script>alert('ͼƬ��Ϣ�޸ĳɹ���'); window.location='../picture_manager.php';</script>";
   }
   else
   {
	 echo "<script>alert('ͼƬ��Ϣ�޸�ʧ�ܣ�'); window.location='../picture_update.php?P_ID=".$pid."';</script>";
   }	
 }
 else
 {
   echo "<script>alert('����дͼƬ���ơ�ͼƬ��Ϣ��'); window.location='../picture_update.php?P_ID=".$pid."';</script>";
 }
 ?>