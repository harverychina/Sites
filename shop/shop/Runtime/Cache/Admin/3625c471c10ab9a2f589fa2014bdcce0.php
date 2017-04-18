<?php if (!defined('THINK_PATH')) exit();?><div class="chang_pass_row">
    <form action="" method="post">
        旧的密码：<input type="password" name="oldpass" id="oldpass">
        新的密码：<input type="password" name="newpass" id="newpass">
        确认密码: <input type="password" name="rpass" id="rpass">
        <img src="/shop/index.php/Admin/Index/verify" alt="" id="change">
        验证码： <input type="text" name="code" id="code">
        <input type="submit" value="修改" id="btn">
    </form>
</div>