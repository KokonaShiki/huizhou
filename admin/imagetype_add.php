<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>ͼ��������</title>
</head>
<body style="width:1024px; text-align:center;background:#F96;margin:0px 0px 0px 0px;">  
<form action="action/imagetype_add_do.php" method="post" >
<div style="text-align:center; margin-left:400px;">

  <div style=" width:500px;  height:50px;">
  <div style="font-size:24px; color:#F00; margin-top:20px;">���ͼ����� </div>
  </div>
  
  <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>�������:</div>
     <div style="float:left; margin-left:100px;"><?php include 'select_producttype1.php';?></div>
  </div >
  
  <div style=" width:500px;height:25px;">
     <div style="float:left;"><font color="red">*</font>�������:</div>
     <div style="float:left; margin-left:100px;"><input type="text" name="txt_name"/></div>
     </div>
     
  <div style=" width:500px;  height:150px;">
     <div style="float:left; margin-top:50px;">��飺 </div>
    <div style="float:left; margin-left:100px;"><textarea name="txt_intro" rows="8" cols="30"></textarea></div>
  </div>
  
  <div style="width:500px;  height:30px;">
     <div colspan="2" align="center"> <input type="submit" value="����"/> </div>
  <td style="margin-top:100px"><a href="main_index.php">������ҳ</a></td>
  </div>
  
  
</div>
</form>
</body>
</html>