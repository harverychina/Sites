<?php
/**
* mysqli对象
* @host 代表主机
* @root 代表管理员 
* @pw   代表密码
* @db   代表被连接数据库名 
* 当打开新连接时，使用完即要关闭连接
*/
$host = '127.0.0.1';
// user 
$root = 'root';
// $pw = '';
$pw = '123456';
$db = 'guestbook';
// @ 错误抑制符 ，将系统提示相关目录、地址信息屏蔽！
$conn = @new mysqli($host, $root, $pw, $db);
// 测试一下当前连接内容
// var_dump($conn);
// 假如有错误，提示错误(指定)
// 错误代码，connect_errno 返回 0 代表无错，1 代表错误
// 错误信息，字符串，connect_error
if ($conn->connect_errno) {
    // echo '连接出错！';
    die('数据库连接出错！'.$conn->connect_error);
}
// 设置当数据库操作编码为  utf-8 格式
$conn->set_charset('utf8');
/* 
else {
    echo '连接成功！';
}
*/
// 连接信息关闭
// $conn->close();
?>