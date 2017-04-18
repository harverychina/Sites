<?php
include_once('config.php');
// var_dump($_POST);

$query = "SELECT * FROM `users` WHERE name = '{$_POST['username']}'";
$rs = $link->query($query);
// var_dump($rs->num_rows);exit;
if(!$rs->num_rows){
	if($_POST['password'] == $_POST['rp']) {
		date_default_timezone_set('PRC');
		$reg_time = date("Y-m-d");
		$query = "INSERT INTO `users` VALUES(NULL, '{$_POST['username']}',1,'{$_POST['password']}','{$reg_time}')";
		// echo $query;exit;
		$link->query($query);
		$arr['msg'] = '注册成功！';
		$arr['success'] = 1;

	} else {
		$arr['msg'] = '两次密码不一致！';
		$arr['success'] = 0;
	}
} else {
	$arr['msg'] = '账号已注册，请重新注册！';
	$arr['success'] = 0;
}

echo json_encode($arr);

?>