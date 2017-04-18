<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/11/3
 * Time: 下午4:11
 */
include_once('libs/config.php');
$time = time();
$islike = 0;
$dislike = 0;
$sql = "INSERT INTO `messages` VALUES (null, '{$_POST['word']}', '{$_SESSION['id']}', '{$time}','{$islike}', '{$dislike}')";
if($link->query($sql)) {
    $arr['msg'] = '发布成功！';
    $arr['success'] = 1;
} else {
    $arr['msg'] = '操作失败！';
    $arr['success'] = 0;
}
echo json_encode($arr);
?>