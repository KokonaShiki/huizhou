<?php 
 /* ������Ϣ�������վ����ҳ */  
  require_once("../../conn/Conn_DB.php");    //�������ݿ������ļ� 
  if( $_GET["V_ID"]!= ""  &&  $_GET["Type"]!= "")
  {
    $pid = $_GET["V_ID"];  //��ȡ���ݵ����±��
     $type = $_GET["Type"];         //��ȡ���ݵĲ�������
    $str ="";
    switch ($type)
    {
      case "1":
        $str = "update word_Info set V_Status=1 where V_ID=".$pid;  //�������
        break;
      case "2":
        $str = "update word_Info set V_Status=2 where V_ID=".$pid;  //�������
        break;      
    }
    $update = mysql_query($str); //ִ��SQL���
    if($update)                  //�ж�ִ�н��          
    {
      echo "<script>alert('�����ɹ���');window.location.href='../word_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('����ʧ�ܣ�');window.location.href='../word_manager.php'</script>";
    }
  }
  else 
  {
    echo "<script>alert('��ѡ��Ҫ������������Ϣ��');window.location.href='../word_manager.php'</script>";     
  }
 ?>