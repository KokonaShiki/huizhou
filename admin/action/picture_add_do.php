 <?php 
 /* ͼƬ��Ϣ��Ӵ���ҳ */  
  require_once"../../conn/Conn_DB.php";   //�������ݿ������ļ�
 if($_POST["txt_name"]!="" && $_FILES["txt_image"]!="") //�жϱ��� ��Ϣ
 {
   $ptid = $_POST["txt_parentid"];    //�����
   $name  = $_POST["txt_name"];       //ͼƬ����
   $image = $_FILES["txt_image"];     //ͼƬ
   $intro = $_POST["txt_intro"];      //����
  
   $createtime = date('Y-m-d H:i:s'); //����ʱ��

   //�ϴ�ͼƬ
  if($image['size'] > 0 && $image['size'] < 1024 * 8000)
  {
	$dir = '../../upload/';   //���ñ���Ŀ¼
	$name2 = $image['name'];  //��ȡ�ϴ��ļ����ļ���
	$rand = rand(0,8000000);  //����һ����0��8000000֮��������
	$name2 = $rand.date('YmdHis').$name2;  //��������ļ���
	$path = $dir.$name2;      //��ϳ������ı���·����Ŀ¼+�ļ�����
	if(!is_dir($dir))         //���û�и�Ŀ¼
	{
		mkdir($dir);          //�򴴽���Ŀ¼
	}
	$i = move_uploaded_file($image['tmp_name'],$path);  //�����ļ���ʵ���ϴ�����
	if($i == true)   //����ϴ��ɹ�������ʾ
	{
	  $path = substr($path,6,strlen($path)-6);  //�޸�·��
	  $str = "insert into picture_Info (PT_ID,P_Name,P_Image,P_Intro,P_Hits,P_CreateTime,P_Status) values (
	          '{$ptid}','{$name}','{$path}','{$intro}',1,'{$createtime}',1)";
	  // echo $str; //��������ڵ��ԣ������ѯ���
	  $insert = mysql_query($str); //ִ��SQL���
	  echo mysql_error();          //��������ڵ��ԣ����������Ϣ
	  if($insert)                 //�ж�ִ�н��
	  {
	    echo "<script>alert('ͼƬ��Ϣ��ӳɹ���'); window.location='../picture_add.php';</script>";
	  }
	  else
	  {
		echo "<script>alert('ͼƬ��Ϣ���ʧ�ܣ�'); window.location='../picture_add.php';</script>";
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