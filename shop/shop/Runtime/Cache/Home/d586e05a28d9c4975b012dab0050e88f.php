<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="/shop/Public/CSS/login.css">
	<script src="/shop/Public/JS/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#change").click(function(){
				$base_url = "/shop/index.php/Home/Index/verify";
				$code_url = $base_url + "?" + Math.random();
				$(this).attr('src', $code_url);
			});
		})
	</script>
</head>
<body>
	<div class="wrap">
		<form action="/shop/index.php/Home/Index/check_login" method="post">
			<h3>用户登录</h3>
			账号：<input type="text" name="username" id="username">
			密码：<input type="password" name="password" id="password">
			<img src="/shop/index.php/Home/Index/verify" alt="" id="change">
			验证码：<input type="text" name="code" id="code">
			<input type="submit" value="登录" id="btn">
		</form>
	</div>
</body>
</html>