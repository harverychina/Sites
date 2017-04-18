<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员注册</title>
	<!-- 样式文件链接 -->
    <link rel="stylesheet" href="reg.css" type="text/css">
    <!-- 前端 jQuery文件的链接 -->
    <script type="text/javascript" src="jquery.min.js"></script>
    <!-- jQuery的代码 -->
    <script type="text/javascript">
    // 当 body 开始加载内容时
    	$(document).ready(function(){
    		// 当 ID名字为 btn 的按钮 单击时
    		$("#btn").click(function(){
    			// 获得表单中文本框和密码框的值
    			var username = $("#username").val();
    			var password = $("#password").val();
    			var rp = $("#rp").val();
    			// 检查获得值
    			// alert(username);
    			// 判断用户的输入
    			if(username == "") {
                    $('<div id="msg" />').html("注册账号不能为空！").appendTo('#err1').fadeOut(3000);
                    $("#username").focus();
                    return false;
                }
				if(password == "") {
                    $('<div id="msg" />').html("注册密码不能为空！").appendTo('#err2').fadeOut(3000);
                    $("#password").focus();
    				return false;
				}
                if(rp == "") {
                    $('<div id="msg" />').html("确认密码不能为空！").appendTo('#err3').fadeOut(3000);
                    $("#rp").focus();
                    return false;
                }
                $.ajax({
                    type: 'POST',
                    url: "check_reg.php",
                    dataType: 'json',
                    data:{username: username, password: password, rp: rp},
                    success: function(json){
                        if(json.success == 1) {
                            alert(json.msg);
                            // 成功后跳转到登录页
                            window.location.href = "login.php";
                        } else {
                            alert(json.msg);
                        }
                    }
                });
    		});
    	});
    </script>
</head>
<body>
	<div class="wrap">
		<h3>会员注册</h3>
		<form method="POST">
			<label for="username">注册账号</label><input type="text" name="username" id="username"><div id="err1"></div>
            <label for="password">注册密码</label><input type="password" name="password" id="password"><div id="err2"></div>
            <label for="rpassword">确认密码</label><input type="password" name="rp" id="rp"><div id="err3"></div>
            <input type="button" value="完成" id="btn">
		</form>
	</div>
</body>
</html>