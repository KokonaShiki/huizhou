<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
 <title>��Ʒ������</title>
</head>
<body style="width:1024px; text-align:center;margin:0px 0px 0px 0px;">  
<div style=" width:1024px; height:680px; margin-left:160px; background:url(images/94cad1c8a786c9171af43309cb3d70cf3bc7570e.jpg) no-repeat;>
<form action="" method="post">
<div style="font-size:26px; color:#F00; padding-top:60px;text-align:center;">ͼ��������</div>
<div style=" height:30px;width:660px; margin-left:250px;">
 <div style="height:20px; width:80px;font-size:16px; float:left; color: #C69;">���</div>
 <div style="height:20px; width:80px;font-size:16px;  float:left; color :#C69;">�������</div>
 <div style="height:20px; width:160px;font-size:16px;  float:left; color: #C69;">ͼ���������</div>
 <div style="height:20px; width:80px;font-size:16px;  float:left; color: #C69;">�����</div>
 <div style="height:20px; width:80px;font-size:16px;  float:left; color :#C69;">�༭</div>
 <div style="height:20px; width:80px;font-size:16px;  float:left; color: #C69;">ɾ��</div>
  <div style="height:20px; width:80px;font-size:16px;  float:left; color:#000;">����</div>
 </div>
 <?   
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ� 
  $str = "select * from  Product_Type order by PT_ParentID , PT_ID" ; //��ѯ���
  $arr = mysql_query( $str );  //ִ��SQL���
  while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
  {
?>
<div style="width:660px; height:30px;margin-left:250px;">
   <div style="height:20px; width:80px; float:left;"> <? echo $result["PT_ID"];?> </div>   
   <div style="height:20px; width:80px; float:left;"> <? echo $result["PT_ParentID"];?> </div>
   <div style="height:20px; width:160px; float:left;"> <? echo $result["PT_Name"];?> </div>
   <div style="height:20px; width:80px; float:left;"> <? echo $result["PT_Intro"];?> </div>
   <div style="height:20px; width:80px; float:left;"> <a href="imagetype_update.php?PT_ID=<? echo $result["PT_ID"];?>">�༭</a></div>
   <div style="height:20px; width:80px; float:left;"> <a href="action/imagetype_delete_do.php?PT_ID=<? echo $result["PT_ID"];?>">ɾ��</a></div>
 <td style="margin-top:100px"><a href="main_index.php">������ҳ</a></td>
 </div>
<? }   ?>
</div>
</form>
</div>
</body>
</html>