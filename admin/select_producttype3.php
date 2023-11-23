<select name="txt_parentid">
<?php 
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件
  static $line="├";  //声明静态变量
  GetProductType('0');  //调用函数

  function GetProductType($parentid) //定义函数，加载类别
  {
    global $line;  //声明全局静态变量
    global $parentid2;
    $str = "select * from Product_Type where PT_ParentID=".$parentid;
    $arr = mysql_query($str); //执行SQL语句
    if($arr != null)
    {
      while ($result = mysql_fetch_array($arr))
      {
        echo "<option value='".$result['PT_ID']."'".($parentid2 == $result['PT_ID']? "selected":"")." >".$line.$result['PT_Name']."</option>"; 
        $line .= "─┴";
        GetProductType($result['PT_ID']);  //递归 调用
        $line  = substr($line,0,strlen($line) -4); 	
      }
    }
  }
?>
</select>