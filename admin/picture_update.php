<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�༭ͼƬ��Ϣ</title>
</head>
<body style="width:1024px; text-align:center; background:#F96;margin:0px 0px 0px 0px;">  
<form action="action/picture_update_do.php" method="post"  enctype="multipart/form-data">
<?   
 if($_GET["P_ID"] != "" )
 {
   require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�  
   $pid= $_GET["P_ID"];    //��ȡ���ݵ�ͼƬ��� 
   $str = "select * from picture_Info where P_ID=".$pid; //��ѯ���
   $arr = mysql_query($str);  //ִ��SQL���
   $result = mysql_fetch_array($arr);  //��ȡ��ѯ��� 
   $parentid2 = $result['PT_Id'];  //������Ÿ�ֵ������$parentid2,���ڶ�λ��������������ѡ����
?>
<div style="text-align:center;width:500px; margin-left:350px;">
<div border="1" width="100%">
  <div style=" width:500px;  height:40px;"><div  style=" font-size:26px; margin-top:20px; color:#C33;">�༭ͼƬ��Ϣ  </div></div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>�������</div>
     <div style="float:left; margin-left:112px;"><?php include 'select_producttype3.php';?></div>
  </div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>ͼƬ���ƣ�</div>
     <div style="float:left; margin-left:100px;""><input type="text" name="txt_name" value="<? echo $result['P_Name'] ?>"/></div>
  </div>
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>ͼ��ͼƬ��</div>
     <div style="float:left; margin-left:100px;""><input type="file" name="txt_image"/></div>
  </div>
  <div style=" width:500px;  height:100px;">
     <div style="float:left; margin-top:50px;">��飺</div>
     <div style="float:left; margin-left:60px;"">
      <textarea name="txt_intro" rows="8" cols="30"><? echo $result['P_Intro'] ?></textarea>
      <img src='../<? echo $result["P_Image"];?>' width="130" height="130"/>
      <input type="hidden" name="txt_image2"  value='<? echo $result["P_Image"];?>'/>
     </div>
  </div>
  <div style=" width:500px;  height:30px;">
     <div colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<? echo $result['P_ID'] ?>"/>
       <input type="submit" value="����"/>
     </div>
  </div>
</div>
</div>
<?php 
 }
 else 
 {
   echo "<script>alert('��ѡ��Ҫ�༭��ͼƬ��Ϣ��');window.location.href='picture_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>