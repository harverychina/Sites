<?php
include_once('config.php');
// var_dump($_POST);exit;
$query = "SELECT `password` FROM users WHERE name = '{$_POST['username']}'";
// echo $query;
$rs = $link->query($query);

if($rs->num_rows) {

	$row = $rs->fetch_assoc();

	if($row['password'] == $_POST['password']){
		$_SESSION['u'] = $_POST['username'];
		$arr['msg'] = '登录成功！';
		$arr['success'] = 1;
	} else {
		$arr['msg'] = '密码错误！';
		$arr['success'] = 0;
	}

} else {
	$arr['msg'] = '账号不存在，请注册！';
	$arr['success'] = 2;
}
echo json_encode($arr);
?>