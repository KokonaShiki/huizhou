<?php 
 /* ͼ�����ɾ������ҳ */  
  require_once("../../conn/Conn_DB.php");    //�������ݿ������ļ�
  if( $_GET["PT_ID"]!= "")
  {
    $ptid = $_GET["PT_ID"];  //��ȡ���ݵ�ͼ�������
    $str = "select * from product_Type where PT_ParentID=".$ptid;  //��ѯ���
    $arr = mysql_query($str);    //ִ��SQL���
    if (mysql_num_rows($arr)>0)  //�жϲ�ѯ����������ж��Ƿ��������
    {
      echo "<script>alert('����������������ɾ�������');window.location.href='../imagetype_manager.php'</script>";
    }
    else 
    {
      $str = "delete from product_Type where PT_ID=".$ptid; //ɾ�����
      $delete = mysql_query($str); //ִ��SQL���
      if($delete)                 //�ж�ִ�н��
      {
    	echo "<script>alert('ͼ�����ɾ���ɹ���');window.location.href='../imagetype_manager.php'</script>";
      }
      else
      {
        echo "<script>alert('ͼ�����ɾ��ʧ�ܣ�');window.location.href='../imagetype_manager.php'</script>";
      }
    } 
  }
  else 
  {
   echo "<script>alert('��ѡ��Ҫɾ����ͼ�����');window.location.href='../imagetype_manager.php'</script>";     
  }
 ?>