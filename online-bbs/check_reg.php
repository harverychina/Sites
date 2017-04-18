<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/10/26
 * Time: 下午9:59
 */
include_once('libs/config.php');
$sql = "SELECT * FROM `user` WHERE `id` = '{$_POST['username']}'";
$rs = $link->query($sql);
if($rs->num_rows) {
    $arr['msg'] = '用户已经存在，请重新注册!';
    $arr['success'] = 0;
} else {
    $reg_time = time();
    $flag = 2;

    $sql = "INSERT INTO `user` VALUES ('{$_POST['username']}','{$_POST['main_password']}','{$reg_time}','{$_POST['head_img_select']}','{$flag}')";

    if($link->query($sql)) {
        $arr['success'] = 1;
        $arr['msg']  = '注册成功！';
    } else {
        $arr['success'] = 0;
        $arr['msg'] = '注册失败！';
    }
}
echo json_encode($arr);
?>