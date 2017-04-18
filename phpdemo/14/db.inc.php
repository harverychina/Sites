<?php
$host = 'localhost';
// $host = '127.0.0.1';
$root = 'root';
// $pw = '';
$pw = '123456';
// link database name
$db = 'school';

$conn = new mysqli($host, $root, $pw, $db);
// var_dump($conn);exit;

// check conn status
if ($conn->connect_error) {
    die("数据库连接失败！". $conn->connect_error);
//} else {
   // echo('connected successfully!');
}
// 关闭数据库
$conn->close();
?>