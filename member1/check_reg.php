<?php
/**
 * 注册新用户
 */
// var_dump($_POST);
session_start();

if ($_POST['u'] || $_POST['pass'] || $_POST['rpass']){
    include_once('./conn/conn.php');
    $sql = "SELECT * FROM users WHERE name='".$_POST['u']."'";
    $rs = mysql_query($sql);
    $row = mysql_fetch_assoc($rs);

    if($row['name']) {
    	echo "<script>alert('用户已经注册，请重新注册！');window.history.back(-1);</script>";
    } else {
    	if( $_POST['pass'] == $_POST['rpass']) {
    		date_default_timezone_set('PRC');
    		$regtime = date('Y-m-d');
    		$pass = md5($_POST['pass']);
	    	$sql = "INSERT INTO users VALUES(null, '$_POST[u]', '$pass', '$regtime')";
	    	if ( $rs = mysql_query($sql)) {
                $_SESSION['u'] = $_POST['u'];
	    		echo "<script>alert('注册成功，请完善本人资料！');window.location.href='q.php';</script>";
	    	} else {
	    		echo "<script>alert('数据操作失败，请检查！');window.history.back(-1);</script>";
	    	}
    	} else {
    		echo "<script>alert('两次密码不一致！');window.history.back(-1);</script>";
    	}
    }
} else {
	echo "<script>alert('输入有误，请重新输入！');window.history.back(-1);</script>";
}
?>