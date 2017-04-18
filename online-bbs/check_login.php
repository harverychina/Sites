<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/10/26
 * Time: 上午11:00
 */
include_once('libs/config.php');
$sql = "SELECT * FROM `user` WHERE `id` = '{$_POST['username']}'";
$rs = $link ->query($sql);
if($row = $rs->fetch_assoc()) {
    if($row['pass'] == $_POST['password']) {
        $_SESSION['id'] = $_POST['username'];
        $arr['msg'] = '登录成功！';
        $arr['success'] = 1;
    } else {
        $arr['msg'] = '密码不正确！';
        $arr['success'] = 0;
    }
} else {
    $arr['msg'] = '用户不存在，请点击注册！';
    $arr['success'] = 0;
}
echo json_encode($arr);
?>