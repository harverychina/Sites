<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>在线社区</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="libs/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn").click(function(){
                var username = $("#username").val();
                var password = $("#password").val();

                if(username != '' && password != '') {
                    $.ajax({
                        type: 'post',
                        url: 'check_login.php',
                        dataType: 'json',
                        data: { username: username, password: password },
                        success: function(json){
                            if(json.success == 1) {
                                window.location.href = 'main.php';
                                alert(json.msg);
                            } else {
                                window.location.href = 'reg.php';
                                alert(json.msg);
                            }
                        }
                    })
                } else {
                    alert('账号密码不能为空！');
                    $("#username").focus();
                    return false;
                }
            });
        });
    </script>
</head>
<body>
<div class="wrap">
    <div class="main">
        <h3>社区登录</h3>
        <form method="post">
            <input type="text" name="username" id="username" placeholder="社区账号">
            <input type="password" name="password" id="password" placeholder="社区密码">
            <input type="button" id="btn" value="登录"><a href="reg.php" id="reg">注册</a>
        </form>
    </div>
</div>
</body>
</html>