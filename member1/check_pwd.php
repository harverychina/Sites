<?php
session_start();
// var_dump($_POST);
if(isset($_SESSION['u_id'])) {
	$uid = $_SESSION['u_id'];
} elseif(isset($_POST['uid'])) {
	$uid = $_POST['uid'];
}
// var_dump($uid);
if($uid){
	// var_dump($_SESSION['qs']);
	if(($uid != $_SESSION['qs']['u_id']) || ($_POST['a1']!= $_SESSION['qs']['a_1']) || ($_POST['a2']!= $_SESSION['qs']['a_2']) || ($_POST['a3']!= $_SESSION['qs']['a_3'])) {
		echo "<script>alert('回答问题有误！'); window.history.go(-1);</script>";
	} else {
		echo "<script>window.location.href='newpwd.php';</script>";
	}

} else {
	echo "<script>alert('非法操作！'); window.location.href='index.php';</script>";
}

?>