<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员登录</title>
	<script src="jquery.min.js"></script>
	<link rel="stylesheet" href="login.css">
	<script>
		$(document).ready(function(){
			$("#login").click(function(){
				var username = $(".username").val();
				var password = $(".password").val();
				if(username != '' && password != '') {
					$.ajax({
						type: 'post',
						url: 'check_login.php',
						dataType: 'json',
						data:{ username: username, password: password},
						success: function(json){
							if(json.success == 1) {
								alert(json.msg);
								window.location.href = 'admin_index.php';
							} else {
								alert(json.msg);
								return false;
							}
						}
					})
				} else {
					alert('账号密码不能为空！');
					$(".username").focus();
					return false;
				}
			})
		})
	</script>
</head>
<body>
	<form method="post">
		<h3>管理员登录</h3>
		账号：<input type="text" name="username" class="username"><br>
		密码：<input type="password" name="password" class="password"><br>
		<input type="button" value="完成" name="login" id="login">
	</form>
</body>
</html>
