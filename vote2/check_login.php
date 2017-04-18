<?php
include_once('config.php');
$sql = "SELECT `pass` FROM `vote_admin` WHERE `id` = '{$_POST['username']}'";
// echo $sql; exit;
$rs = $link->query($sql);
// var_dump($rs->num_rows);exit;
if($rs->num_rows) {
    $row = $rs->fetch_assoc();
    if($row['pass'] == $_POST['password']) {
        $_SESSION['id'] = $_POST['username'];
        $arr['success'] = 1;
        $arr['msg'] = '登录成功！';
    } else {
        $arr['success'] = 0;
        $arr['msg'] = '密码不正确！';
    }
} else {
    $arr['success'] = 0;
    $arr['msg'] = '非法用户！';
}
echo json_encode($arr);
?>
