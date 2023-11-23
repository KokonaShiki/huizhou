<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>子页面信息管理</title>
</head>
<body style=" width:1024px; text-align:center;margin:0px 0px 0px 0px; background: #F96" >  
<div  style="height:30px; text-align: center; font-size:26px; color:#F00; margin-top:10px; margin-left:400px;"> 子页面信息管理</div>
<form action="" method="post">
<div  style="text-align:center;width:1024px; margin-left:200px;">
<table border="1">
<tr>
  <td>编号</td><td>所属类别</td><td>子页面名称</td><td>子页面内容</td><td>图片名称</td><td>图片</td><td>状态</td>
  <td>　　发布时间</td><td colspan="4">　　　　操作</td>
</tr>
 <?   
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
  $str = "select p.*,pt.PT_ID,pt.PT_Name from  ziyemian_Info p,Product_Type pt where p.PT_ID = pt.PT_ID order by P_CreateTime desc"; //查询语句
  $arr = mysql_query( $str );  //执行SQL语句
  while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
  {
?>
  <tr>
    <td> <? echo $result["P_ID"];?> </td>
    <td> <? echo $result["PT_Name"];?> </td>   
    <td> <? echo $result["P_Name"];?> </td>
        <td> <? echo $result["P_Name1"];?> </td>
            <td> <? echo $result["P_Name2"];?> </td>

    <td> <img src='../<? echo $result["P_Image"];?>' width="39" height="39"/> </td>
    <td> <? echo $result["P_Status"]=='1'? '<font color=blue>已发布</font>':'<font color=red>未发布</font>';?>  </td>
    <td> <? echo $result["P_CreateTime"];?> </td>
    <td> <a href="action/ziyemian1_action_do.php?Type=1&P_ID=<? echo $result["P_ID"];?>">发布</a></td>
    <td> <a href="action/ziyemian1_action_do.php?Type=2&P_ID=<? echo $result["P_ID"];?>">放入回收站</a></td>
    <td> <a href="ziyemian1_update.php?P_ID=<? echo $result["P_ID"];?>">编辑</a></td>
    <td><a href="main_index.php">返回主页</a></td>
  </tr>
<? }   ?>
 </table>
 </div>
</form>
</body>
</html>