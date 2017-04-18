<?php
include_once('include/config.php');
$sql = "SELECT * FROM `message` WHERE `title` like '{$_POST['keyword']}%' ";

$rs = $link->query($sql);

$data = $rs->fetch_assoc();
$data['time'] = date('Y-m-d H:i:s', $data['time']);

if($rs->num_rows) {
    $arr['code'] = 1;
    $arr['data'] = $data;

} else {
    $arr['code'] = 0;
}
echo json_encode($arr);

?>