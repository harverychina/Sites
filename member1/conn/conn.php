<?php
$link = mysql_connect('localhost','root','');
if($link) {
   mysql_query('set names utf8');
   mysql_select_db('member');
} else {
	echo "<script>alert('连接数据库失败！');</script>";
}
?>