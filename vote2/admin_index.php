<?php
	// 处理用户进管理员界面时的处理
	session_start();
	// 是否登录过 ?
	// echo $_SESSION['id'];exit;
	if(isset($_SESSION['id'])) {
		if($_SESSION['id'] == 'admin') {
			// 跳转管理员主页
			header("location:admin_set.php");
		} else {
			// 普通用户  主页
			header("location:index.php");
		}
	} else {
		// 非登录用户
		include_once("login.php");
	}
?>
