<?php
include_once('config.php');
// var_dump($_SESSION['u']);exit;
if(!isset($_SESSION['u'])){
	$arr['msg'] = '非法操作！';
	$arr['success'] = 0;
} else {
	// var_dump($_POST);
	if($link->connect_error) {
		die('Connect Error ( '. $link->connect_errno .')' . $link->connect_error );
	} else {
		$query = "UPDATE users SET gender = '{$_POST['gender']}' WHERE name = '{$_SESSION['u']}'";
		// echo $query;
		$rs = $link->query($query);
		if($rs){
			$arr['msg'] = '更新成功！';
			$arr['success'] = 1;
		} else {
			$arr['msg'] = '非法操作！';
			$arr['success'] = 0;
		}
	}
}
echo json_encode($arr);
?>