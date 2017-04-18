<?php
include_once('include/config.php');
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];
$address = $_POST['address'];

$sql = "UPDATE `message` SET title = '{$title}', author = '{$author}', content = '{$content}', address = '{$address}' WHERE id='{$id}'";

if($link->query($sql)) {
    $arr['code'] = 1;
} else {
    $arr['code'] = 0;
}
echo json_encode($arr);
?>