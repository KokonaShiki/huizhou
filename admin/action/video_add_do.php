 <?php 
 /* ��Ϣ��Ӵ���ҳ */  
  require_once"../../conn/Conn_DB.php";   //�������ݿ������ļ�
 if($_POST["txt_name"]!="" && $_FILES["txt_video"]!="") //�жϱ��� ��Ϣ
 {
   $ptid = $_POST["txt_parentid"];    //�����
   $name  = $_POST["txt_name"];       //��Ƶ����
   $video = $_FILES["txt_video"];     //��Ƶ
   $intro = $_POST["txt_intro"];      //����
  
  
  
   $createtime = date('Y-m-d H:i:s'); //����ʱ��

   //�ϴ���Ƶ
  if($video['size'] > 0 && $video['size'] < 1024 * 2000000000)
  {
	$dir = '../../video/';   //���ñ���Ŀ¼
	$name2 = $video['name'];  //��ȡ�ϴ��ļ����ļ���
	$rand = rand(0,8000000);  //����һ����0��8000000֮��������
	$name2 = $rand.date('YmdHis').$name2;  //��������ļ���
	$path = $dir.$name2;      //��ϳ������ı���·����Ŀ¼+�ļ�����
	if(!is_dir($dir))         //���û�и�Ŀ¼
	{
		mkdir($dir);          //�򴴽���Ŀ¼
	}
	$i = move_uploaded_file($video['tmp_name'],$path);  //�����ļ���ʵ���ϴ�����
	if($i == true)   //����ϴ��ɹ�������ʾ
	{
	  $path = substr($path,6,strlen($path)-6);  //�޸�·��
	  $str = "insert into video_Info (PT_ID,P_Name,P_Video,P_Intro,P_Hits,P_CreateTime,P_Status) values (
	          '{$ptid}','{$name}','{$path}','{$intro}',1,'{$createtime}',1)";
	  // echo $str; //��������ڵ��ԣ������ѯ���
	  $insert = mysql_query($str); //ִ��SQL���
	  echo mysql_error();          //��������ڵ��ԣ����������Ϣ
	  if($insert)                 //�ж�ִ�н��
	  {
	    echo "<script>alert('��Ƶ��Ϣ��ӳɹ���'); window.location='../video_add.php';</script>";
	  }
	  else
	  {
		echo "<script>alert('��Ƶ��Ϣ���ʧ�ܣ�'); window.location='../video_add.php';</script>";
	  }	
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

 ?>
</body>
</html>