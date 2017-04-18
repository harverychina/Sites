<?php 
session_start(); 
if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['u'])) {
	include_once('./conn/conn.php');
	$sql = "SELECT * FROM users WHERE name='".$_GET['u']."'";
	// echo $sql;exit;
	$rs = mysql_query($sql);
	$users = mysql_fetch_assoc($rs);
	// var_dump($users);exit;
	
	$sql = "SELECT * FROM question WHERE u_id='".$users['id']."'";
	// echo $sql;
	$rs = mysql_query($sql);
	$qs = mysql_fetch_assoc($rs);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>忘记密码</title>
</head>
<body>
	<h3>修改密码</h3>
	<form>
		用户名：<input type="text" name="u" placeholder="请输入用户名">
		<!-- 怎么出问题? -->
		<input type="submit" name="" value="查询">

	</form>
	<?php 
	if(isset($qs) && !empty($qs)) {
		$_SESSION['qs'] = $qs;
		echo "<form action='check_pwd.php' method='post'><div>";
		if(!isset($_SESSION['u_id'])){
			echo "<input type='hidden' name='uid' value='".$users['id']."'>";
		}
		echo "用户名：".$users['name']."<br>";
		echo "问题1：".$qs['q_1']."<br>答案1：<input type='text' name='a1'><br>";
		echo "问题2：".$qs['q_2']."<br>答案2：<input type='text' name='a2'><br>";
		echo "问题3：".$qs['q_3']."<br>答案3：<input type='text' name='a3'><br>";
		echo "<input type='submit' value='提交'>";
		echo "</div></form>";
	}
	?>
</body>
</html>