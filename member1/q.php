<?php
/**
 * 注册新用户后，设置3个问题和答案，用于修改密码
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>设置问题</title>
</head>
<body>
	<h3>设置问题</h3>
	<form action="q_ok.php" method="post">
		问题1：<input type="text" name="q1"><br>
		答案1：<input type="text" name="a1"><br>
		问题2：<input type="text" name="q2"><br>
		答案2：<input type="text" name="a2"><br>
		问题3：<input type="text" name="q3"><br>
		答案3：<input type="text" name="a3"><br>
		<input type="submit" value="提交">
	</form>
</body>
</html>