<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>����������Ϣ</title>
</head>
<body style=" width:1024px; background:#F96; text-align:center;margin:0px 0px 0px 0px;">  

<form action="action/article_add_do.php" method="post"  enctype="multipart/form-data">


<div style="text-align:center; margin-left:400px;">
  <div style=" width:500px;  height:35px;">
  <div style=" width:500px;  height:30px; font-size:26px; color:#C33;">������Ϣ  </div></div>
    <div style=" width:500px;  height:25px;">
     <div style="float:left;"><font color="red">*</font>�������</div>
     <div style ="float:left; margin-left:112px;"><?php include 'select_producttype3.php';?></div>
  </div>
  <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>�������ƣ�</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name"/></div>
  </div>
   <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>���¼��1��</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name1"/></div>
  </div>
   <div style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>���¼��2��</div>
     <div style ="float:left; margin-left:100px;"><input type="text" name="txt_name2"/></div>
  </div>
  <div  style=" width:500px;  height:25px;">
     <div style ="float:left;"><font color="red">*</font>ͼ�����£�</div>
     <div style ="float:left; margin-left:100px;"><input type="file" name="txt_image"/></div>
  </div>


  <div style=" width:500px;  height:120px;">
     <div style ="float:left; margin-top:35px;">��飺 </div>
    <div style ="float:left;margin-left:100px;"><textarea name="txt_intro" rows="8" cols="30"></textarea></div>
  </div>
     
  <div style=" width:500px;  height:50px; margin-top:20px;">
     <div colspan="2" align="center">
        <input type="submit" value="����"/>
     </div>
     <td style="margin-top:100px"><a href="main_index.php">������ҳ</a></td>
  </div>
</div>
</form>
</body>
</html>