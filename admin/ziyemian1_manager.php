<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>��ҳ����Ϣ����</title>
</head>
<body style=" width:1024px; text-align:center;margin:0px 0px 0px 0px; background: #F96" >  
<div  style="height:30px; text-align: center; font-size:26px; color:#F00; margin-top:10px; margin-left:400px;"> ��ҳ����Ϣ����</div>
<form action="" method="post">
<div  style="text-align:center;width:1024px; margin-left:200px;">
<table border="1">
<tr>
  <td>���</td><td>�������</td><td>��ҳ������</td><td>��ҳ������</td><td>ͼƬ����</td><td>ͼƬ</td><td>״̬</td>
  <td>��������ʱ��</td><td colspan="4">������������</td>
</tr>
 <?   
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�  
  $str = "select p.*,pt.PT_ID,pt.PT_Name from  ziyemian_Info p,Product_Type pt where p.PT_ID = pt.PT_ID order by P_CreateTime desc"; //��ѯ���
  $arr = mysql_query( $str );  //ִ��SQL���
  while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
  {
?>
  <tr>
    <td> <? echo $result["P_ID"];?> </td>
    <td> <? echo $result["PT_Name"];?> </td>   
    <td> <? echo $result["P_Name"];?> </td>
        <td> <? echo $result["P_Name1"];?> </td>
            <td> <? echo $result["P_Name2"];?> </td>

    <td> <img src='../<? echo $result["P_Image"];?>' width="39" height="39"/> </td>
    <td> <? echo $result["P_Status"]=='1'? '<font color=blue>�ѷ���</font>':'<font color=red>δ����</font>';?>  </td>
    <td> <? echo $result["P_CreateTime"];?> </td>
    <td> <a href="action/ziyemian1_action_do.php?Type=1&P_ID=<? echo $result["P_ID"];?>">����</a></td>
    <td> <a href="action/ziyemian1_action_do.php?Type=2&P_ID=<? echo $result["P_ID"];?>">�������վ</a></td>
    <td> <a href="ziyemian1_update.php?P_ID=<? echo $result["P_ID"];?>">�༭</a></td>
    <td><a href="main_index.php">������ҳ</a></td>
  </tr>
<? }   ?>
 </table>
 </div>
</form>
</body>
</html>