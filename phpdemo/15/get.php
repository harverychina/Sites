<?php
/**
*   include 和 require 区别
*   include 当程序出错时，发现警告，程序继续执行下去
*   require 当程序出错时，发现很严警告，程序不向下执行
*   _once 指只执行一次，不会永久包含 ----潜水
*   没有 _once ---- 话唠
*/
// 打开一次数据配置文件
include_once('db.inc.php');
// var_dump($_GET);
// SQL 语句 INSERT
// 中国时区
date_default_timezone_set('PRC');
// 标题
$title = $_GET['title'];
// 内容
$content = $_GET['content'];
// 两个时间
$create_time = date('Y-m-d');
$update_time = date('Y-m-d');
// $sql = "INSERT INTO `message` (`id`, `title`, `content`, `create_time`, `update_time`) VALUES(null, '$title', '$content', '$create_time', '$update_time')";
$sql = "INSERT INTO `message` VALUES(null, '$title', '$content', 0 ,'$create_time', '$update_time')";
// SQL没有任何函数帮助解决，输出SQL语句在页面上，再通过 PHPMYADMIN工具检查
// echo $sql;
// PHP 执行SQL语句函数  根据db.inc.php中创建的mysqli函数 $conn
// result 结果
// $result = $conn->query($sql);
// 检查执行SQL语句结果 当结果为 1 执行成功，当结果为 0 执行失败
// print_r($result);
// exit;
if($result = $conn->query($sql)) {
    echo "<script>alert('留言成功！');</script>";
} 
// 关闭数据库操作
$conn->close();
// 跳转主页
echo "<script>window.location.href='index.php';</script>";

?>