<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
	 <link rel="stylesheet" href="login.css" type="text/css">
    <!-- 前端 jQuery文件的链接 -->
    <script type="text/javascript" src="jquery.min.js"></script>
    <script>
    $(document).ready(function() {
    	$("#btn").click(function() {
    		var username = $("#username").val();
    		var password = $("#password").val();
    		if( username != "") {
    			if( password != "") {
                    $.ajax({
                        type: 'POST',
                        url: 'check_login.php',
                        dataType: 'json',
                        data: {username: username, password: password},
                        success: function(json){
                            if(json.success == 1) {
                                alert(json.msg);
                                window.location.href = "index.php";
                            } else if(json.success == 2 ){
                                alert(json.msg);
                                window.location.replace(location.href);
                            } else {
                                alert(json.msg);
                                $("#password").focus();
                            }
                        }
                    })
    			} else {
    				$('<div id="msg" />').html("密码不能为空！").appendTo('#err2').fadeOut(3000);
                    $("#password").focus();
                    return false;
    			}
    		} else {
    			$('<div id="msg" />').html("账号不能为空！").appendTo('#err1').fadeOut(3000);
                $("#username").focus();
                return false;
    		}
    	});
    });
    </script>
</head>
<body>
	<div class="wrap">
		<h3>会员登录</h3>
		<form method="POST">
			<label for="username">账号</label><input type="text" name="" id="username"><div id="err1"></div>
            <label for="password">密码</label><input type="password" name="" id="password"><div id="err2"></div>
            <div><a href="reg.php">新用户注册</a></div>
            <input type="button" value="确定" id="btn">
		</form>
	</div>
</body>
</html>