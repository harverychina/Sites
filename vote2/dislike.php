<?php
header('Content-type: text/html; charset=utf-8');
include_once('config.php');
$sql = "UPDATE `vote_message` SET dislike = dislike + 1 WHERE id = '{$_POST['id']}'";
// echo $sql;exit;
$rs = $link->query($sql);
$arr['msg'] = '投票成功！';
$arr['success'] = 1;
echo json_encode($arr);
?>
