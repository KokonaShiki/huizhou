 <?php   
  /* ��Ƶ��Ϣ�޸Ĵ���ҳ */  
  require_once("../../conn/Conn_DB.php");  
  if($_POST["txt_name"]!= ""&& $_FILES["txt_video"]!= "")
  {
   $pid = $_POST["txt_id"];           //��Ƶ���
   $ptid = $_POST["txt_parentid"];    //�����
   $name  = $_POST["txt_name"];       //��Ƶ����
   $video = $_FILES["txt_video"];     //��Ƶ
 
   $intro = $_POST["txt_intro"];      //����
  
  
  
   $createtime = date('Y-m-d H:i:s'); //����ʱ��

   if($video['name']!= '')  //�����ѡ����Ƶ����ʹ������Ƶ
   { 
     //�ϴ���Ƶ
     if($video['size'] > 0 && $video['size'] < 1024 * 200000000)
     {
	   $dir = '../../video/';           //���ñ���Ŀ¼
	   $name2 = $video['name'];     //��ȡ�ϴ��ļ����ļ���
	   $rand = rand(0,8000000);  //����һ����0��8000000֮��������
	   $name2 = $rand.date('YmdHis').$name2;  //��������ļ���
	   $path = $dir.$name2;   //��ϳ������ı���·����Ŀ¼+�ļ�����
	   if(!is_dir($dir))    //���û�и�Ŀ¼
	   {
		 mkdir($dir);    //�򴴽���Ŀ¼
	   }
	   $i= move_uploaded_file($video['tmp_name'],$path);  //�����ļ���ʵ���ϴ�����
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
   else //���û��ѡ����Ƶ����ʹ��ԭ��Ƶ
   {
  	 $path = $video2;
   }
   $str = "update video_Info set PT_ID=$ptid,P_Name='$name',P_Video='$path',P_Intro='$intro',P_CreateTime='$createtime' where P_ID=".$pid;
   // echo $str; //��������ڵ��ԣ������ѯ���
   $update = mysql_query($str);  //ִ��SQL���
   echo mysql_error();           //��������ڵ��ԣ����������Ϣ
   if( $update )                 //�ж�ִ�н��
   {
	 echo "<script>alert('��Ƶ��Ϣ�޸ĳɹ���'); window.location='../video_manager.php';</script>";
   }
   else
   {
	 echo "<script>alert('��Ƶ��Ϣ�޸�ʧ�ܣ�'); window.location='../video_update.php?P_ID=".$pid."';</script>";
   }	
 }
 else
 {
   echo "<script>alert('����д��Ƶ���ơ���Ƶ��Ϣ��'); window.location='../video_update.php?P_ID=".$pid."';</script>";
 }
 ?>