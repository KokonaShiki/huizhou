 <?php 
 /*��ҳ����Ϣ��Ӵ���ҳ */  
  require_once"../../conn/Conn_DB.php";   //�������ݿ������ļ�
 if($_POST["txt_name"]!="" && $_FILES["txt_image"]!="") //�жϱ��� ��Ϣ
 {
   $ptid = $_POST["txt_parentid"];    //�����
   $name  = $_POST["txt_name"];       //��������
   $name1  = $_POST["txt_name1"];       //��������
    $name2  = $_POST["txt_name2"];       //��������
	 $name3  = $_POST["txt_name3"];       //��������
	  $name4  = $_POST["txt_name4"];       //��������
	   $name5  = $_POST["txt_name5"];       //��������
	    $name6  = $_POST["txt_name6"];       //��������
		 $name7  = $_POST["txt_name7"];       //��������
		  $name8  = $_POST["txt_name8"];       //��������
		   $name9  = $_POST["txt_name9"];       //��������
		    $name10  = $_POST["txt_name10"];       //��������
			 $name11  = $_POST["txt_name11"];       //��������
			  $name12  = $_POST["txt_name12"];       //��������
			   $name13  = $_POST["txt_name13"];       //��������
			    $name14  = $_POST["txt_name14"];       //��������
				 $name15  = $_POST["txt_name15"];       //��������
				  $name16  = $_POST["txt_name16"];       //��������
				   $name17  = $_POST["txt_name17"];       //��������
				   $name18  = $_POST["txt_name18"];       //��������
				   $name19  = $_POST["txt_name19"];       //��������
				   $name20  = $_POST["txt_name20"];       //��������
				   $name21  = $_POST["txt_name21"];       //��������
				   $name22  = $_POST["txt_name22"];       //��������
				   $name23  = $_POST["txt_name23"];       //��������
				   $name24  = $_POST["txt_name24"];       //��������
				   $name25  = $_POST["txt_name25"];       //��������
				   $name26  = $_POST["txt_name26"];       //��������
				   $name27  = $_POST["txt_name27"];       //��������
				   $name28  = $_POST["txt_name28"];       //��������
				   $name29  = $_POST["txt_name29"];       //��������
				   $name30  = $_POST["txt_name30"];       //��������
				   $name31  = $_POST["txt_name31"];       //��������
				   $name32  = $_POST["txt_name32"];       //��������
				   $name33  = $_POST["txt_name33"];       //��������
				   $name34  = $_POST["txt_name34"];       //��������
				   $name35  = $_POST["txt_name35"];       //��������
				   $name36  = $_POST["txt_name36"];       //��������
				   $name37  = $_POST["txt_name37"];       //��������
				   $name38  = $_POST["txt_name38"];       //��������
				   $name39  = $_POST["txt_name39"];       //��������
				   $name40  = $_POST["txt_name40"];       //��������
				   $name41  = $_POST["txt_name41"];       //��������
				   $name42  = $_POST["txt_name42"];       //��������
				   $name43  = $_POST["txt_name42"];       //��������
				   $name44  = $_POST["txt_name44"];       //��������
				   $name45  = $_POST["txt_name45"];       //��������
				   $name46  = $_POST["txt_name46"];       //��������
				   $name47  = $_POST["txt_name47"];       //��������
				   $name48  = $_POST["txt_name48"];       //��������
				   $name49  = $_POST["txt_name49"];       //��������
				   $name50  = $_POST["txt_name50"];       //��������
				   $name51  = $_POST["txt_name51"];       //��������
				   $name52  = $_POST["txt_name52"];       //��������
				   $name53  = $_POST["txt_name53"];       //��������
				   $name54  = $_POST["txt_name54"];       //��������
				   $name55  = $_POST["txt_name55"];       //��������
				   $name56  = $_POST["txt_name56"];       //��������
				   $name57  = $_POST["txt_name57"];       //��������
				   $name58  = $_POST["txt_name58"];       //��������
				   $name59  = $_POST["txt_name59"];       //��������
				   $name60  = $_POST["txt_name60"];       //��������
				   $name61  = $_POST["txt_name61"];       //��������
				   $name62  = $_POST["txt_name62"];       //��������
				   $name63  = $_POST["txt_name63"];       //��������
				   $name64  = $_POST["txt_name64"];       //��������
				   $name65  = $_POST["txt_name65"];       //��������
				   $name66  = $_POST["txt_name66"];       //��������
				   $name67  = $_POST["txt_name67"];       //��������
				   $name68  = $_POST["txt_name68"];       //��������
				   $name69  = $_POST["txt_name69"];       //��������
				   $name70  = $_POST["txt_name70"];       //��������
				   $name71  = $_POST["txt_name71"];       //��������
				   $name72  = $_POST["txt_name72"];       //��������
				   $name73  = $_POST["txt_name73"];       //��������
				   $name74  = $_POST["txt_name74"];       //��������
				   $name75  = $_POST["txt_name75"];       //��������
				   $name76  = $_POST["txt_name76"];       //��������
				   $name77  = $_POST["txt_name77"];       //��������
				   $name78  = $_POST["txt_name78"];       //��������
				   $name79  = $_POST["txt_name79"];       //��������
   $image = $_FILES["txt_image"];     //ͼƬ
   $intro = $_POST["txt_intro"];      //����
  
   $createtime = date('Y-m-d H:i:s'); //����ʱ��

   //�ϴ�ͼƬ
  if($image['size'] > 0 && $image['size'] < 1024 * 8000)
  {
	$dir = '../../upload/';   //���ñ���Ŀ¼
	$name2 = $image['name'];  //��ȡ�ϴ��ļ����ļ���
	$rand = rand(0,8000000);  //����һ����0��8000000֮��������
	$name2 = $rand.date('YmdHis').$name2;  //��������ļ���
	$path = $dir.$name2;      //��ϳ������ı���·����Ŀ¼+�ļ�����
	if(!is_dir($dir))         //���û�и�Ŀ¼
	{
		mkdir($dir);          //�򴴽���Ŀ¼
	}
	$i = move_uploaded_file($image['tmp_name'],$path);  //�����ļ���ʵ���ϴ�����
	if($i == true)   //����ϴ��ɹ�������ʾ
	{
	  $path = substr($path,6,strlen($path)-6);  //�޸�·��
	  $str = "insert into ziyemian_Info (PT_ID,P_Name,P_Name1,P_Name2,P_Name3,P_Name4,P_Name5,P_Name6,P_Name7,P_Name8,P_Name9,P_Name10,P_Name11,P_Name12,P_Name13,P_Name14,P_Name15,P_Name16,P_Name17,P_Name18,P_Name19,P_Name20,P_Name21,P_Name22,P_Name23,P_Name24,P_Name25,P_Name26,P_Name27,P_Name28,P_Name29,P_Name30,P_Name31,P_Name32,P_Name33,P_Name34,P_Name35,P_Name36,P_Name37,P_Name38,P_Name39,P_Name40,P_Name41,P_Name42,P_Name43,P_Name44,P_Name45,P_Name46,P_Name47,P_Name48,P_Name49,P_Name50,P_Name51,P_Name52,P_Name53,P_Name54,P_Name55,P_Name56,P_Name57,P_Name58,P_Name59,P_Name60,P_Name61,P_Name62,P_Name63,P_Name64,P_Name65,P_Name66,P_Name67,P_Name68,P_Name69,P_Name70,P_Name71,P_Name72,P_Name73,P_Name74,P_Name75,P_Name76,P_Name77,P_Name78,P_Name79,P_Image,P_Intro,P_Hits,P_CreateTime,P_Status) values (
	          '{$ptid}','{$name}','{$name1}','{$name2}','{$name3}','{$name4}','{$name5}','{$name6}','{$name7}','{$name8}','{$name9}','{$name10}','{$name11}','{$name12}','{$name13}','{$name14}','{$name15}','{$name16}','{$name17}','{$name18}','{$name19}','{$name20}','{$name21}','{$name22}','{$name23}','{$name24}','{$name25}','{$name26}','{$name27}','{$name28}','{$name29}','{$name30}','{$name31}','{$name32}','{$name33}','{$name34}','{$name35}','{$name36}','{$name37}','{$name38}','{$name39}','{$name40}','{$name41}','{$name42}','{$name43}','{$name44}','{$name45}','{$name46}','{$name47}','{$name48}','{$name49}','{$name50}','{$name51}','{$name52}','{$name53}','{$name54}','{$name55}','{$name56}','{$name57}','{$name58}','{$name59}','{$name60}','{$name61}','{$name62}','{$name63}','{$name64}','{$name65}','{$name66}','{$name67}','{$name68}','{$name59}','{$name70}','{$name71}','{$name72}','{$name73}','{$name74}','{$name75}','{$name76}','{$name77}','{$name78}','{$name79}','{$path}','{$intro}',1,'{$createtime}',1)";
	  // echo $str; //��������ڵ��ԣ������ѯ���
	  $insert = mysql_query($str); //ִ��SQL���
	  echo mysql_error();          //��������ڵ��ԣ����������Ϣ
	  if($insert)                 //�ж�ִ�н��
	  {
	    echo "<script>alert('������Ϣ��ӳɹ���'); window.location='../ziyemian1_add.php';</script>";
	  }
	  else
	  {
		echo "<script>alert('������Ϣ���ʧ�ܣ�'); window.location='../ziyemian1_add.php';</script>";
	  }	
    }
	else
	{
	  echo "<script>alert('�ļ��ϴ�ʧ��');</script>";
	}
  }
  else 
  {
  	echo"<script>alert('�ļ���С��������վҪ��')</script>";  	
  }  
 }

 ?>
</body>
</html>