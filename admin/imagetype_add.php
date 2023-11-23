<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>图像类别添加</title>
</head>
<body style="width:1024px; text-align:center;background:#F96;margin:0px 0px 0px 0px;">  
<form action="action/imagetype_add_do.php" method="post" >
<div style="text-align:center; margin-left:400px;">

  <div style=" width:500px;  height:50px;">
  <div style="font-size:24px; color:#F00; margin-top:20px;">添加图像类别 </div>
  </div>
  
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>父级类别:</div>
     <div style="float:left; margin-left:100px;"><?php include 'select_producttype1.php';?></div>
  </div >
  
  <div style=" width:500px;height:25px;">
     <div style="float:left;"><font color="red">*</font>类别名称:</div>
     <div style="float:left; margin-left:100px;"><input type="text" name="txt_name"/></div>
     </div>
     
  <div style=" width:500px;  height:150px;">
     <div style="float:left; margin-top:50px;">简介： </div>
    <div style="float:left; margin-left:100px;"><textarea name="txt_intro" rows="8" cols="30"></textarea></div>
  </div>
  
  <div style="width:500px;  height:30px;">
     <div colspan="2" align="center"> <input type="submit" value="保存"/> </div>
  <td style="margin-top:100px"><a href="main_index.php">返回主页</a></td>
  </div>
  
  
</div>
</form>
</body>
</html>