<?php
	session_start();
	if(isset($_SESSION['u'])) {
		unset($_SESSION['u']);
		session_destroy();
		echo "<script>alert('当前账号已经登出！'); window.location.href='index.php';</script>";
	}

?>