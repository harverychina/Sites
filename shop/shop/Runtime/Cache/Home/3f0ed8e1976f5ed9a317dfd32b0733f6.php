<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" href="/Public/CSS/reg.css">
	<script src="/Public/JS/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#change").click(function(){
				$base_url = "/index.php/Home/Index/verify";
				$code_url = $base_url + "?" + Math.random();
				$(this).attr('src', $code_url);
			});
		})
	</script>
</head>
<body>
	<div class="wrap">
		<form action="/index.php/Home/Index/check_reg" method="post">
			<h3>用户注册</h3>
			注册账号：<input type="text" name="username" id="username">
			注册密码：<input type="password" name="password" id="password">
			确认密码：<input type="password" name="rpassword" id="password">
			<img src="/index.php/Home/Index/verify" alt="" id="change">
			验证码：<input type="text" name="code" id="code">
			<input type="submit" value="注册" id="btn">
		</form>
	</div>
</body>
</html>