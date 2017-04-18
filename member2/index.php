<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员主页</title>
	<link rel="stylesheet" href="index.css" type="text/css">
</head>
<body>
	<div class="wrap">
		<div class="header">
			<h3>会员主页</h3>
			<ul>
			<?php if(isset($_SESSION['u'])) { ?>
				<li><a href="user_desc.php"><?php echo $_SESSION['u']; ?></a></li>
				<li><a href="logout.php">登出</a></li>
			<?php } else { ?>
				<li><a href="login.php">登录</a></li>
				<li><a href="reg.php">注册</a></li>
			<?php } ?>
			</ul>
		</div>
	</div>
</body>
</html>