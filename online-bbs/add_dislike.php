<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/11/3
 * Time: 下午4:53
 */
include_once('libs/config.php');
$sql = "UPDATE `messages` SET `dislike` = `dislike` + 1 WHERE id = '{$_GET['id']}'";
if($link->query($sql)) {
    header('location:main.php');
}
?>