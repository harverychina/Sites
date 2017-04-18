<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/10/26
 * Time: 上午11:21
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>社区注册</title>
    <link rel="stylesheet" href="css/reg.css">
    <script src="libs/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#preview_img").attr("src", 'images/01.jpg');

            $('#btn').click(function() {
                var username = $('#username').val();
                var main_password = $('#main_password').val();
                var cfm_password = $('#cfm_password').val();
                var code = $('#code').val();
                var verify_code = $('#verify_code').val();
                // 头像ID
                var head_img_select = $('#head_img_select').val();

                if(username != "" && main_password != "" && cfm_password != "" && code != "" && head_img_select != "") {
                    if(code == verify_code) {
                        if(main_password == cfm_password) {
                            $.ajax({
                                type: 'post',
                                url: 'check_reg.php',
                                dataType: 'json',
                                data: { username: username, main_password: main_password, head_img_select: head_img_select },
                                success: function (json) {
                                    if(json.success == 1) {
                                        window.location.href = 'index.php';
                                        alert(json.msg);
                                    } else {
                                        alert(json.msg);
                                        return false;
                                    }
                                }
                            })
                        } else {
                            alert('两次密码不一致！');
                            $('#main_password').focus();
                            return false;
                        }
                    } else {
                        alert('验证码不正确！');
                        $("#code").focus();
                        return false;
                    }
                } else {
                    alert('注册内容不能空！');
                    $("#username").focus();
                    return false;
                }
            });
            $('#head_img_select').change(function () {
                var img = 'images/'+ $("#head_img_select").val();
                $("#preview_img").attr("src", img);
            })
        })
    </script>
</head>
<body>
<div class="wrap">
    <div class="main">
        <h3>社区注册</h3>
        <form method="post">
            <input type="text" name="username" id="username" placeholder="注册账号">
            <div class="head_img_area">
                <img src="" alt="preview_img" id="preview_img">
                <select name="head_img_select" id="head_img_select">
                    <option value="01.jpg">头像1</option>
                    <option value="02.jpg">头像2</option>
                    <option value="03.jpg">头像3</option>
                    <option value="04.jpg">头像4</option>
                </select>
            </div>
            <input type="password" name="main_password" id="main_password" placeholder="注册密码">
            <input type="password" name="cfm_password" id="cfm_password" placeholder="确认密码">
            <input type="text" name="code" id="code" placeholder="请输入下方验证码">
            <div id="verify"><a href="reg.php"><?php
                $num = ""; $i = 1;
                do {
                    $num = $num . mt_rand(0, 9);
                    $i++;
                }while($i<=4);
                echo $num;
                ?></a></div>
            <input type="hidden" name="verify_code" id="verify_code" value="<?php echo $num;?>">
            <button id="btn">注册</button>
        </form>
    </div>
</div>
</body>
</html>
