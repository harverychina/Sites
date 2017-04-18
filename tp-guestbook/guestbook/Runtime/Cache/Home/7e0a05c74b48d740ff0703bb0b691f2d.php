<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="/tp-guestbook/Public/CSS/login.css" type="text/css">
	<script src="/tp-guestbook/Public/JS/jquery.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$("#username").focus();
		$(".btn").click(function(){
			var username = $("#username").val();
			var password = $("#password").val();
			if(username == "") {
				$('<div id="err" />').html("账号不能为空!").appendTo('#sub').fadeOut(3000);
				$('#username').focus();
				return false;
			}
			if(password == "") {
				$('<div id="err" />').html("密码不能为空!").appendTo('#sub').fadeOut(3000);
				$('#password').focus();
				return false;
			}
		});
	});
</script>
</head>
<body>
<div class="wrap">
	<form action="/tp-guestbook/index.php/Home/Index/checklogin" method="POST">
		账号<input type="text" name="username" id="username"><br>
		密码<input type="password" name="password" id="password"><br>
		<div id="sub"></div>
		<input type="submit" class="btn" value="确定">
	</form>
</div>
</body>
</html>