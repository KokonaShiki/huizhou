<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�༭��Ʒ���</title>
</head>
<body style="width:1024px; text-align:center;background:#F96;margin:0px 0px 0px 0px;">  
<form action="action/imagetype_update_do.php" method="post" >
<?   
if($_GET["PT_ID"] !="" )
{
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�  
  $ntid= $_GET["PT_ID"];  //��ȡ���ݵ������
  $str = "select * from Product_Type where PT_ID=".$ntid;  //��ѯ���
  $arr = mysql_query($str);  //ִ��SQL���
  $result = mysql_fetch_array($arr);  //��ȡ��ѯ���   
  $parentid2 = $result["PT_ParentID"]; //����������Ÿ�ֵ������$parentid2,���ڶ�λ��������������ѡ����
?>
<div  style="text-align:center; margin-left:400px;">
  <div  style=" width:500px;  height:40px;">
  <div  style=" font-size:26px; color:#C33;"colspan="2" align="center">�༭��Ʒ��� </div>
  </div>
  <div  style=" width:500px;  height:25px;">
  <div style="float:left;"><font color="red">*</font>�������</div>
  <div style="float:left; margin-left:100px;"><?php include 'select_producttype2.php';?></div>
  </div>
  <div  style=" width:500px;  height:25px;">
  <div style="float:left;"><font color="red">*</font>�������</div>
  <div style="float:left; margin-left:100px;"><input type="text" name="txt_name"  value="<? echo $result['PT_Name'] ?>"/></div>
  </div>
  <div style=" width:500px;  height:150px;">
  <div style="float:left; margin-top:50px;">��飺 </div>
  <div style="float:left; margin-left:100px;"><textarea name="txt_intro" rows="8" cols="30"><? echo $result['PT_Intro'] ?></textarea></div>
  </div>
  <div style=" width:500px;  height:30px;">
     <div colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<? echo $result['PT_ID'] ?>"/>
       <input type="submit" value="����"/>
     </div>
  </div>
</div>
<?php 
 }
 else 
 {
   echo "<script>alert('��ѡ��Ҫ�༭����Ʒ���');window.location.href='imagetype_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>