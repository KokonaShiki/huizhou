<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>留言信息管理</title>
</head>
<body style=" width:1024px; text-align:center;margin:0px 0px 0px 0px; background: #F96" >  
<div  style="height:30px; text-align: center; font-size:26px; color:#F00; margin-top:10px; margin-left:400px;"> 留言信息管理</div>
<form action="" method="post">
<div  style="text-align:center;width:1024px; margin-left:500px;">
<table border="1">
<tr>
  <td>编号</td><td>客户昵称</td><td>联系方式</td><td>留言信息</td>
  <td>　　发布时间</td><td colspan="1">　　　　操作</td>
</tr>
 <?   
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
  $str = "select * from message_info order by M_ID" ; //查询语句
  $arr = mysql_query( $str );  //执行SQL语句
  while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
  {
?>
  <tr>
    <td> <? echo $result["M_ID"];?> </td>   
    <td> <? echo $result["M_Name"];?> </td>
    <td> <? echo $result["M_Phone"]?>  </td>
    <td> <? echo $result["M_Message"]?>  </td>
    <td> <? echo $result["M_CreateTime"];?> </td>
    <td style="margin-top:100px"><a href="main_index.php">返回主页</a></td>
  </tr>
<? }   ?>
 </table>
 </div>
</form>
</body>
</html>