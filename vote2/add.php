<?php
header('Content-type: text/html; charset=utf-8');
include_once('config.php');
$sql = "SELECT * FROM `vote_message` WHERE `content` = '{$_POST['userid']}'";
// echo $sql;exit;
$rs = $link->query($sql);
if($rs->num_rows) {
    $arr['msg'] = '候选人已经存在，请重新填写！';
    $arr['success'] = 0;
} else {
    $sql = "INSERT INTO `vote_message` VALUES(null, '{$_POST['userid']}', 0, 0)";
    // echo $sql; exit;
    $link->query($sql);
    $arr['msg'] = '投票成功！';
    $arr['success'] = 1;
}
echo json_encode($arr);
?>
