<?php
/**
 * ==============================
 * @php database config for mysql
 * @数据库配置文件
 * @Author : < 聪少@Harry >
 * @Program : member points
 * ==============================
 */
header("Content-type: text/html; charset: 'utf-8'");
$link = new mysqli('localhost', 'root', '', 'points');

if(!$link->connect_error) {
	$link->set_charset('utf8');
} else {
	die("数据库连接失败！".$link->connect_error);
}

?>