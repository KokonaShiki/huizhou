<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
 <title>商品类别管理</title>
</head>
<body style="width:1024px; text-align:center;margin:0px 0px 0px 0px;">  
<div style=" width:1024px; height:680px; margin-left:160px; background:url(images/94cad1c8a786c9171af43309cb3d70cf3bc7570e.jpg) no-repeat;>
<form action="" method="post">
<div style="font-size:26px; color:#F00; padding-top:60px;text-align:center;">图像类别管理</div>
<div style=" height:30px;width:660px; margin-left:250px;">
 <div style="height:20px; width:80px;font-size:16px; float:left; color: #C69;">编号</div>
 <div style="height:20px; width:80px;font-size:16px;  float:left; color :#C69;">父级编号</div>
 <div style="height:20px; width:160px;font-size:16px;  float:left; color: #C69;">图像类别名称</div>
 <div style="height:20px; width:80px;font-size:16px;  float:left; color: #C69;">类别简介</div>
 <div style="height:20px; width:80px;font-size:16px;  float:left; color :#C69;">编辑</div>
 <div style="height:20px; width:80px;font-size:16px;  float:left; color: #C69;">删除</div>
  <div style="height:20px; width:80px;font-size:16px;  float:left; color:#000;">操作</div>
 </div>
 <?   
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件 
  $str = "select * from  Product_Type order by PT_ParentID , PT_ID" ; //查询语句
  $arr = mysql_query( $str );  //执行SQL语句
  while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
  {
?>
<div style="width:660px; height:30px;margin-left:250px;">
   <div style="height:20px; width:80px; float:left;"> <? echo $result["PT_ID"];?> </div>   
   <div style="height:20px; width:80px; float:left;"> <? echo $result["PT_ParentID"];?> </div>
   <div style="height:20px; width:160px; float:left;"> <? echo $result["PT_Name"];?> </div>
   <div style="height:20px; width:80px; float:left;"> <? echo $result["PT_Intro"];?> </div>
   <div style="height:20px; width:80px; float:left;"> <a href="imagetype_update.php?PT_ID=<? echo $result["PT_ID"];?>">编辑</a></div>
   <div style="height:20px; width:80px; float:left;"> <a href="action/imagetype_delete_do.php?PT_ID=<? echo $result["PT_ID"];?>">删除</a></div>
 <td style="margin-top:100px"><a href="main_index.php">返回主页</a></td>
 </div>
<? }   ?>
</div>
</form>
</div>
</body>
</html>