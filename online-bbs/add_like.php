<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/11/3
 * Time: 下午4:48
 */
include_once('libs/config.php');
$sql = "UPDATE `messages` SET `islike` = `islike` + 1 WHERE id = '{$_GET['id']}'";
if($link->query($sql)) {
    header('location:main.php');
}
?>