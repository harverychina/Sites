<?php
include_once('include/config.php');
if(!isset($_GET['id'])) {
    header('location:index.php');
} else {
    $sql = "DELETE FROM `message` WHERE `id` = '{$_GET['id']}'";
    if($link->query($sql)) {
        echo "<script>alert('成功删除一条记录！');</script>";
        header('location:index.php');
    } else {
        echo "<script>alert('删除失败！');window.location.go(-1);</script>";
    }
}
?>