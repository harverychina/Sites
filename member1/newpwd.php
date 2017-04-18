<?php
session_start();
// var_dump($_SESSION);
if(isset($_GET['btn'])) {
	include_once('./conn/conn.php');
	$sql = "UPDATE users SET pass = '".md5($_GET['np'])."' WHERE id='".$_SESSION['qs']['u_id']."'";
	// echo $sql;
	if($rs = mysql_query($sql)) {
		session_destroy();
		echo "<script>alert('修改成功！'); window.location.href='index.php';</script>";
	} else {
		echo "<script>alert('操作失败！'); window.history.go(-1);</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>设置新密码</title>
</head>
<body>
	<h3>输入新密码</h3>
	<form>
		<input type="password" name="np"><input type="submit" name="btn" value="提交">
	</form>
</body>
</html>