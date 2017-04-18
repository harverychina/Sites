<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员管理 Member</title>
</head>
<body>
	<h3>登录</h3>
	<?php if(isset($_SESSION['u'])) echo "<h3>当前登录账号是：$_SESSION[u] , <a href='logout.php'>登出账号</a></h3>"; ?>
	<form action="check_login.php" method="post">
		<input type="text" name="u" placeholder="请输入账号"><br>
		<input type="password" name="p" placeholder="请输入密码"><br>
		<input type="submit" value="登录"><br>
		<a href="reg.php">注册新用户</a>&nbsp;<a href="forgetpwd.php">忘记密码</a>
	</form>
</body>
</html>