<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Member 会员系统</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="site-wrapp">
		<header>
			<h3>会员系统</h3>
		</header>
		<div class="content">
		<?php if(isset($_SESSION['user'])){ ?>
			// 当用户登录后显示以下内容
			<div class="left">
				<div class="img">
					<img src="" alt="">
				</div>
				<ul class="menu">
					<li><a href="#">基本信息</a></li>
					<li><a href="#">会员积分</a></li>
					<li><a href="#">地址管理</a></li>
					<li><a href="#">注销用户</a></li>
				</ul>
			</div>
			<div class="right">
				<div class="r-content"></div>
			</div>
		<?php } else {
			include('login.html');
		}?>
		</div>
		<footer>
			<p>&copy;<a href="http://www.gzittc.com">广州市工贸技师学院</a>&nbsp;信息产业系&nbsp;网站开发与维护专业《网站功能模块开发》课程练习项目</p>
		</footer>
	</div>
</body>
</html>