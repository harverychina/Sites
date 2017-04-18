<?php
/*
* @以下是连接数据库配置代码
* @host                 连接主机名称
* @root                 连接主机账号
* @pw                   连接密码
* @db                   连接数据库名称
* @mysqli               连接mysql数据库对象（目前连接数据库方式有：mysqli 和 pdo)
* @connect_error        连接时错误信息
* Can't link to database check for variblite, exmple is $host / $root / $pw / $db
* return message for the mysqli connect content, exmple is connect_error() function result.
*/
$host = 'localhost';
// $host = '127.0.0.1';
$root = 'root';
// $pw = '';
$pw = '123456';
$db = 'test';

$conn = new mysqli($host, $root, $pw, $db);
// var_dump($conn);exit;

// check conn status
if ($conn->connect_error) {
    die("数据库连接失败！". $conn->connect_error);
} else {
    echo('connected successfully!');
}
// 关闭数据库
$conn->close();