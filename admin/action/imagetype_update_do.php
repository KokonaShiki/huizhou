<?php 
/* ͼ������޸Ĵ���ҳ */
  require_once("../../conn/Conn_DB.php");  //�������ݿ������ļ�  
  if( $_POST["txt_name"]!= "" )   //�ж�������� �Ƿ�Ϊ��
  {
 	$ptid = $_POST["txt_id"];        //�����
    $name = $_POST["txt_name"];       //�������
    $parentid = $_POST["txt_parentid"];//�������
    $intro = $_POST["txt_intro"];     //�����
    $str = "update Product_Type set PT_ParentID=$parentid,PT_Name='$name',PT_Intro='$intro' where PT_ID=".$ptid;  //�������
    $update = mysql_query($str); //ִ��SQL���
    if($update)                  //�ж�ִ�н��
    {
  	  echo "<script>alert('ͼ������޸ĳɹ���');window.location.href='../imagetype_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('ͼ������޸�ʧ�ܣ�');window.location.href='../imagetype_update.php?PT_ID=".$ptid."'</script>";
    }  
  }
  else 
  {
    echo "<script>alert('������ͼ��������ƣ�');window.location.href='../imagetype_update.php?PT_ID=".$ptid."'</script>";     
  }
 ?>