
 <?php 
 /* ������Ϣ��Ӵ���ҳ */  
  require_once"../../conn/Conn_DB.php";   //�������ݿ������ļ�
 if($_POST["txt_name"]!="") //�жϱ��� ��Ϣ
 {
    $name  = $_POST["txt_name"];       //��������
   $intro = $_POST["txt_intro"];      //����
   
   $createtime = date('Y-m-d H:i:s'); //����ʱ��
  $str = "insert into Word_Info (W_Name,W_intro) values ('{$name}','{$intro}')"; 
  $insert = mysql_query($str);         //ִ��SQL���
  if($insert)         
  {
  	 echo "<script>alert('��ϲ����������ӳɹ���');window.location.href='../main_index.php'</script>";   //��ת��������Ϣ��ʾҳ��
  }
  else
  {
    echo "<script>alert('�Բ����������ʧ�ܣ�');window.location.href='../word_add.php'</script>";   //��ת�������ҳ�� 
  }  
 }
 else 
 {
   echo "<script>alert('��������������');window.location.href='../word_add.php'</script>";     //��ת�������ҳ��
 }
 ?>