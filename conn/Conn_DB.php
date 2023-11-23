<?php
/* 定义数据库连接类 */
class ConnDB
{
    //声明成员变量
    private $host;     //MySQL服务器地址
    private $username; //数据库用户名
    private $password; //数据库密码
    private $charset;  //数据库编码格式
    private $dbname;   //数据库名称
    
    //构造函数，实现类的初始化
    public function ConnDB ($host1, $username1, $password1, $dbname1, $charset1) 
    {
        $this->host = $host1;        //将参数值赋值给成员变量
        $this->username = $username1; 
        $this->password = $password1; 
        $this->dbname = $dbname1;
        $this->charset = $charset1; 
    }
    
    //成员方法，实现数据库连接
    public function getConn () 
    {
        $conn = mysql_connect($this->host, $this->username, $this->password);  //连接MySQL服务器
        mysql_select_db($this->dbname, $conn);  //选择数据库
        mysql_query('set names ' . $this->charset); //设置数据库编码格式
        return $conn; //返回连接句柄
    }
}

$conndb=new ConnDB("localhost","root","123","culture1",'gbk');//数据库连接类实例化
$conn=$conndb->getConn();	//获取链接句柄	
?>