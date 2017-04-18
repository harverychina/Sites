<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>include / require 包含（引用）文件</title>
</head>
<body>

<!-- 包含记事本文件 当文件不存在时，include会报错误，但程序不会继续执行下去 -->
<?php include('ex-1.txt'); ?>

<!-- 当文件不存在时，require会报严重错误，程序将被停止 -->
<?php require('ex-2.txt'); ?>

<?php include_one('ex-3.txt'); ?>

</body>
</html>