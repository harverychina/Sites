<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" href="/tp-guestbook/Public/CSS/reg.css" type="text/css">
	<script src="/tp-guestbook/Public/JS/jquery.min.js"></script>
	<script type="text/javascript">
	$(function(){
		// 确定按钮的事件
		$('.btn').click(function(){
			// 接受表单值
			var username = $("#username").val();
			var password = $("#password").val();
			var rpassword = $("#rpassword").val();
			// 用户验证码
			var code = $("#input_code").val();

			if(username == "") {
				$('<div id="err" />').html("注册账号不能为空!").appendTo('#sub').fadeOut(3000);
				$('#username').focus();
				return false;
			}
			if(password == "") {
				$('<div id="err" />').html("注册密码不能为空!").appendTo('#sub').fadeOut(3000);
				$('#password').focus();
				return false;
			}
			if(rpassword == "") {
				$('<div id="err" />').html("确认密码不能为空!").appendTo('#sub').fadeOut(3000);
				$('#rpassword').focus();
				return false;
			}
			if(code == "") {
				$('<div id="err" />').html("验证码不能为空!").appendTo('#sub').fadeOut(3000);
				$('#input_code').focus();
				return false;
			}


		});
		// 刷新验证码
		$("#code").click(function() {
			$base_url = "/tp-guestbook/index.php/Home/Index/Verify";
			$code_url = $base_url + "?" + Math.random();
			$(this).attr('src', $code_url);
		});
	})
	</script>
</head>
<body>
	<div class="wrap">
		<form action="/tp-guestbook/index.php/Home/Index/checkreg" method="POST">
		<label for="">注册账号</label>
		<input type="text" name="username" id="username"><br>
		<label for="">注册密码</label>
		<input type="password" name="password" id="password"><br>
		<label for="">确认密码</label>
		<input type="password" name="rpassword" id="rpassword"><br>
		<!-- 验证码 -->
		<label for="">验证码</label>
		<input type="text" name="code" id="input_code"><br>
		<div id="sub"></div>
		<img src='/tp-guestbook/index.php/Home/Index/Verify' id="code"/><br>
		<input type="submit" class="btn" value="完成">
	</form>
	</div>
</body>
</html>