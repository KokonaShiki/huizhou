 <?php   
  /* 图片信息修改处理页 */  
  require_once("../../conn/Conn_DB.php");  
  if($_POST["txt_name"]!= ""&& ($_FILES["txt_image"]!= "" ))
  {
   $pid = $_POST["txt_id"];           //图片编号
   $ptid = $_POST["txt_parentid"];    //类别编号
 $ptid = $_POST["txt_parentid"];    //类别编号
   $name  = $_POST["txt_name"];       //文字名称
   $name1  = $_POST["txt_name1"];       //文字名称
    $name2  = $_POST["txt_name2"];       //文字名称
	 $name3  = $_POST["txt_name3"];       //文字名称
	  $name4  = $_POST["txt_name4"];       //文字名称
	   $name5  = $_POST["txt_name5"];       //文字名称
	    $name6  = $_POST["txt_name6"];       //文字名称
		 $name7  = $_POST["txt_name7"];       //文字名称
		  $name8  = $_POST["txt_name8"];       //文字名称
		   $name9  = $_POST["txt_name9"];       //文字名称
		    $name10  = $_POST["txt_name10"];       //文字名称
			 $name11  = $_POST["txt_name11"];       //文字名称
			  $name12  = $_POST["txt_name12"];       //文字名称
			   $name13  = $_POST["txt_name13"];       //文字名称
			    $name14  = $_POST["txt_name14"];       //文字名称
				 $name15  = $_POST["txt_name15"];       //文字名称
				  $name16  = $_POST["txt_name16"];       //文字名称
				   $name17  = $_POST["txt_name17"];       //文字名称
				   $name18  = $_POST["txt_name18"];       //文字名称
				   $name19  = $_POST["txt_name19"];       //文字名称
				   $name20  = $_POST["txt_name20"];       //文字名称
				   $name21  = $_POST["txt_name21"];       //文字名称
				   $name22  = $_POST["txt_name22"];       //文字名称
				   $name23  = $_POST["txt_name23"];       //文字名称
				   $name24  = $_POST["txt_name24"];       //文字名称
				   $name25  = $_POST["txt_name25"];       //文字名称
				   $name26  = $_POST["txt_name26"];       //文字名称
				   $name27  = $_POST["txt_name27"];       //文字名称
				   $name28  = $_POST["txt_name28"];       //文字名称
				   $name29  = $_POST["txt_name29"];       //文字名称
				   $name30  = $_POST["txt_name30"];       //文字名称
				   $name31  = $_POST["txt_name31"];       //文字名称
				   $name32  = $_POST["txt_name32"];       //文字名称
				   $name33  = $_POST["txt_name33"];       //文字名称
				   $name34  = $_POST["txt_name34"];       //文字名称
				   $name35  = $_POST["txt_name35"];       //文字名称
				   $name36  = $_POST["txt_name36"];       //文字名称
				   $name37  = $_POST["txt_name37"];       //文字名称
				   $name38  = $_POST["txt_name38"];       //文字名称
				   $name39  = $_POST["txt_name39"];       //文字名称
				   $name40  = $_POST["txt_name40"];       //文字名称
				   $name41  = $_POST["txt_name41"];       //文字名称
				   $name42  = $_POST["txt_name42"];       //文字名称
				   $name43  = $_POST["txt_name42"];       //文字名称
				   $name44  = $_POST["txt_name44"];       //文字名称
				   $name45  = $_POST["txt_name45"];       //文字名称
				   $name46  = $_POST["txt_name46"];       //文字名称
				   $name47  = $_POST["txt_name47"];       //文字名称
				   $name48  = $_POST["txt_name48"];       //文字名称
				   $name49  = $_POST["txt_name49"];       //文字名称
				   $name50  = $_POST["txt_name50"];       //文字名称
				   $name51  = $_POST["txt_name51"];       //文字名称
				   $name52  = $_POST["txt_name52"];       //文字名称
				   $name53  = $_POST["txt_name53"];       //文字名称
				   $name54  = $_POST["txt_name54"];       //文字名称
				   $name55  = $_POST["txt_name55"];       //文字名称
				   $name56  = $_POST["txt_name56"];       //文字名称
				   $name57  = $_POST["txt_name57"];       //文字名称
				   $name58  = $_POST["txt_name58"];       //文字名称
				   $name59  = $_POST["txt_name59"];       //文字名称
				   $name60  = $_POST["txt_name60"];       //文字名称
				   $name61  = $_POST["txt_name61"];       //文字名称
				   $name62  = $_POST["txt_name62"];       //文字名称
				   $name63  = $_POST["txt_name63"];       //文字名称
				   $name64  = $_POST["txt_name64"];       //文字名称
				   $name65  = $_POST["txt_name65"];       //文字名称
				   $name66  = $_POST["txt_name66"];       //文字名称
				   $name67  = $_POST["txt_name67"];       //文字名称
				   $name68  = $_POST["txt_name68"];       //文字名称
				   $name69  = $_POST["txt_name69"];       //文字名称
				   $name70  = $_POST["txt_name70"];       //文字名称
				   $name71  = $_POST["txt_name71"];       //文字名称
				   $name72  = $_POST["txt_name72"];       //文字名称
				   $name73  = $_POST["txt_name73"];       //文字名称
				   $name74  = $_POST["txt_name74"];       //文字名称
				   $name75  = $_POST["txt_name75"];       //文字名称
				   $name76  = $_POST["txt_name76"];       //文字名称
				   $name77  = $_POST["txt_name77"];       //文字名称
				   $name78  = $_POST["txt_name78"];       //文字名称
				   $name79  = $_POST["txt_name79"];       //文字名称
   $image = $_FILES["txt_image"];     //图片
   $intro = $_POST["txt_intro"];      //介绍

   $createtime = date('Y-m-d H:i:s'); //发布时间

   if($image['name']!= '')  //如果有选择图片，则使用新图片
   { 
     //上传图片
     if($image['size'] > 0 && $image['size'] < 1024 * 8000)
     {
	   $dir = '../../upload/';           //设置保存目录
	   $name2 = $image['name'];     //获取上传文件的文件名
	   $rand = rand(0,8000000);  //生成一个从0到8000000之间的随机数
	   $name2 = $rand.date('YmdHis').$name2;  //重新组合文件名
	   $path = $dir.$name2;   //组合成完整的保存路径（目录+文件名）
	   if(!is_dir($dir))    //如果没有该目录
	   {
		 mkdir($dir);    //则创建该目录
	   }
	   $i= move_uploaded_file($image['tmp_name'],$path);  //复制文件，实现上传功能
	   if($i == true)  //如果上传成功给出提示
	   {
		 $path = substr($path,6,strlen($path)-6);
	   }
	   else
	   {
		 echo "<script>alert('文件上传失败');</script>";
	   }
     }
     else 
     {
  	   echo"<script>alert('文件大小不符合网站要求')</script>";  	
     }
   }
   else //如果没有选择图片，则使用原图片
   {
  	 $path = $image2;
   }
   $str = "update ziyemian_Info set PT_ID=$ptid,P_Name='$name',P_Name1='$name1',P_Name2='$name2',P_Name3='$name3',P_Name4='$name4',P_Name5='$name5',P_Name6='$name6',P_Name7='$name7',P_Name8='$name8',P_Name9='$name9',P_Name10='$name10',P_Name11='$name11',P_Name12='$name12',P_Name13='$name13',P_Name14='$name14',P_Name15='$name15',P_Name16='$name16',P_Name17='$name17',P_Name18='$name18',P_Name19='$name19',P_Name20='$name20',P_Name21='$name21',P_Name22='$name22',P_Name23='$name23',P_Name24='$name24',P_Name25='$name25',P_Name26='$name26',P_Name27='$name27',P_Name28='$name28',P_Name29='$name29',P_Name30='$name30',P_Name31='$name31',P_Name32='$name32',P_Name33='$name33',P_Name34='$name34',P_Name35='$name35',P_Name36='$name36',P_Name37='$name37',P_Name38='$name38',P_Name39='$name39',P_Name40='$name40',P_Name41='$name41',P_Name42='$name42',P_Name43='$name43',P_Name44='$name44',P_Name45='$name45',P_Name46='$name46',P_Name47='$name47',P_Name48='$name48',P_Name49='$name49',P_Name50='$name50',P_Name51='$name51',P_Name52='$name52',P_Name53='$name53',P_Name54='$name54',P_Name55='$name55',P_Name56='$name56',P_Name57='$name57',P_Name58='$name58',P_Name59='$name59',P_Name60='$name60',P_Name61='$name61',P_Name62='$name62',P_Name63='$name63',P_Name64='$name64',P_Name65='$name65',P_Name66='$name66',P_Name67='$name67',P_Name68='$name68',P_Name69='$name69',P_Name70='$name70',P_Name71='$name71',P_Name72='$name72',P_Name73='$name73',P_Name74='$name74',P_Name75='$name75',P_Name76='$name76',P_Name77='$name77',P_Name78='$name78',P_Name79='$name79',P_Image='$path',P_Intro='$intro',P_CreateTime='$createtime' where P_ID=".$pid;
   // echo $str; //本语句用于调试，输出查询语句
   $update = mysql_query($str);  //执行SQL语句
   echo mysql_error();           //本语句用于调试，输出错误信息
   if( $update )                 //判断执行结果
   {
	 echo "<script>alert('图片信息修改成功！'); window.location='../ziyemian1_manager.php';</script>";
   }
   else
   {
	 echo "<script>alert('图片信息修改失败！'); window.location='../ziyemian1_update.php?P_ID=".$pid."';</script>";
   }	
 }
 else
 {
   echo "<script>alert('请填写图片名称、图片信息！'); window.location='../ziyemian1_update.php?P_ID=".$pid."';</script>";
 }
 ?>