<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php include_once('include/top-bar.php');?>
    <div id="login-wrap">
        <form action="">
            <label>账号</label><input type="text" name="username" id="username">
            <label>密码</label><input type="text" name="password" id="password">
            <label>验证码</label><input type="text" name="verifyCode" id="verifyCode">
            <a href="#" id="btn-login">登录</a><a href="#" id="btn-reg">注册</a>
        </form>
    </div>
</body>
</html>