<?php
include_once('include/config.php');

date_default_timezone_set('PRC');

$time = time();

$sql = "INSERT INTO `message` VALUES (NULL,'{$_POST['title']}','{$_POST['author']}','{$_POST['content']}','{$_POST['address']}','{$time}')";

if($link->query($sql)) {
    $arr['code'] = 1;
} else {
    $arr['code'] = 2;
}

echo json_encode($arr);

?>