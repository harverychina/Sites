<?php
session_start();
unset($_SESSION['u']);
session_destroy();
echo "<script>alert('成功登出！'); window.location.href='index.php';</script>";

// header("location:index.php");
?>