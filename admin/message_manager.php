<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>������Ϣ����</title>
</head>
<body style=" width:1024px; text-align:center;margin:0px 0px 0px 0px; background: #F96" >  
<div  style="height:30px; text-align: center; font-size:26px; color:#F00; margin-top:10px; margin-left:400px;"> ������Ϣ����</div>
<form action="" method="post">
<div  style="text-align:center;width:1024px; margin-left:500px;">
<table border="1">
<tr>
  <td>���</td><td>�ͻ��ǳ�</td><td>��ϵ��ʽ</td><td>������Ϣ</td>
  <td>��������ʱ��</td><td colspan="1">������������</td>
</tr>
 <?   
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�  
  $str = "select * from message_info order by M_ID" ; //��ѯ���
  $arr = mysql_query( $str );  //ִ��SQL���
  while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
  {
?>
  <tr>
    <td> <? echo $result["M_ID"];?> </td>   
    <td> <? echo $result["M_Name"];?> </td>
    <td> <? echo $result["M_Phone"]?>  </td>
    <td> <? echo $result["M_Message"]?>  </td>
    <td> <? echo $result["M_CreateTime"];?> </td>
    <td style="margin-top:100px"><a href="main_index.php">������ҳ</a></td>
  </tr>
<? }   ?>
 </table>
 </div>
</form>
</body>
</html>