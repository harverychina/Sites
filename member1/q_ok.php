<?php
session_start();
header("Content-type: text/html; charset='utf8'");
if (empty($_POST['q1']) || empty($_POST['a1']) || empty($_POST['q2']) || empty($_POST['a2']) || empty($_POST['q3']) || empty($_POST['a3'])) {
	echo "<script>alert('输入有误，请重新输入！'); window.history.go(-1);</script>";
} else {
	include_once('./conn/conn.php');
	$sql = "SELECT * FROM users WHERE name='".$_SESSION['u']."'";
	$rs = mysql_query($sql);
	$users = mysql_fetch_assoc($rs);
	
	$sql = "INSERT INTO question VALUES('$users[id]', '$_POST[q1]', '$_POST[a1]', '$_POST[q2]', '$_POST[a2]', '$_POST[q3]', '$_POST[a3]')";
	if ($rs = mysql_query($sql)) {
		echo "<script>alert('设置完成！'); window.location.href='index.php';</script>";
	} else {
		echo "<script>alert('数据操作失败！'); window.history.go(-1);</script>";
	}

}
?>