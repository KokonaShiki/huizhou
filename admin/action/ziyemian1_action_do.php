<?php 
 /* ��Ƶ��Ϣ�������վ����ҳ */  
  require_once("../../conn/Conn_DB.php");    //�������ݿ������ļ� 
  if( $_GET["P_ID"]!= ""  &&  $_GET["Type"]!= "")
  {
    $pid = $_GET["P_ID"];  //��ȡ���ݵ���Ƶ���
     $type = $_GET["Type"];         //��ȡ���ݵĲ�������
    $str ="";
    switch ($type)
    {
      case "1":
        $str = "update ziyemian_Info set P_Status=1 where P_ID=".$pid;  //�������
        break;
      case "2":
        $str = "update ziyemian_Info set P_Status=2 where P_ID=".$pid;  //�������
        break;      
    }
    $update = mysql_query($str); //ִ��SQL���
    if($update)                  //�ж�ִ�н��          
    {
      echo "<script>alert('�����ɹ���');window.location.href='../ziyemian1_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('����ʧ�ܣ�');window.location.href='../ziyemian1_manager.php'</script>";
    }
  }
  else 
  {
    echo "<script>alert('��ѡ��Ҫ��������Ƶ��Ϣ��');window.location.href='../ziyemian1_manager.php'</script>";     
  }
 ?>