<?php
/**
 * 1、表单内容如果是空值，或某部分是空值，怎么处理？
 * 2、没有账号，怎么处理？
 * 3、有账号，怎么处理？
 */

// 显示表单传递内容
// var_dump($_POST);
// empty($_POST) 当返回为1 或 true $_POST内容是空 提示出错，并跳转首页
// 不是经过表单登录，直接运行当前文件是非法操作！
session_start();
if (!empty($_POST)) {
	// echo '表单内容非空！';
	if (!empty($_POST['u'])) {
		// 用户账号是不是空
		if (!empty($_POST['p'])) {
			// 密码是不是空
			$sql = "SELECT * FROM `users` WHERE `name`='".$_POST['u']."'";
			// var_dump($sql);
			include_once('./conn/conn.php');
			$rs = mysql_query($sql);
			// var_dump($rs);
			$users = mysql_fetch_assoc($rs);
			// var_dump($users);
			if ($users){
				if(md5($_POST['p']) == $users['pass']) {
					$_SESSION['u'] = $_POST['u'];
					$_SESSION['u_id'] = $users['id'];
					echo "<script>alert('登录成功！'); window.location.href='index.php';</script>";
				} else {
					echo "<script>alert('账号或密码不正确！'); window.history.back(-1);</script>";
				}
			} else {
				echo "<script>alert('账号不存在，请注册！'); window.location.href='reg.php';</script>";
			}
		} else {
			echo "<script>alert('账号或密码不能为空！'); window.history.back(-1);</script>";
		}

	} else {
		echo "<script>alert('账号或账号不能为空！'); window.location.href='index.php';</script>";
	}

} else {
	// echo '表单内容是空！';
	echo "<script>alert('非法操作！'); window.location.href='index.php';</script>";
}

?>