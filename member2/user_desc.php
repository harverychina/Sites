<?php
include_once('config.php');
if(!isset($_SESSION['u'])) {
	echo "<script>alert('非法操作！');window.location.href='index.php';</script>";
}
$link = new mysqli('localhost', 'root', '123456', 'member');
if($link->connect_error) {
	die('Connect Error ( '. $link->connect_errno .')' . $link->connect_error );
} else {
	$query = "SELECT * FROM users WHERE name = '{$_SESSION['u']}'";
	// echo $query;
	$rs = $link->query($query);
	$row = $rs->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['u']; ?>主页</title>
	<style type="text/css">
		* {padding: 0px; margin: 0px;}
		.wrap { width: 400px; padding: 30px; margin: 0 auto; }
		h3{ height: 30px; padding: 5px; }
		.row { height: 30px; margin: 10px auto; padding: 5px; }
		#username, #gender { height: 28px; }
	</style>
	<script src="jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#btn").focus();
			$("#btn").click(function() {
				var gender = $("#gender").val();
				$.ajax({
					type: "POST",
					url: "check_user_desc.php",
					dataType: 'json',
					data:{ gender: gender},
					success: function(json){
						if(json.success == 1) {
							alert(json.msg);
							window.location.href = 'index.php';
						} else {
							alert(json.msg);
						}
					}
				});
			});
		});

	</script>
</head>
<body>
<form action="">
	<div class="wrap" action="check_user_desc.php">
		<h3>会员信息</h3>
		<div class="row">账号：<?php echo $row['name']; ?></div>
		<div class="row">性别：
			<select name="gender" id="gender">
				<?php
				if($row['gender'] == 1) echo "<option value='1' selected>男</option><option value='0'>女</option>";
				      else
				 echo "<option value='1'>男</option><option value='0' selected>女</option>";
				?>
			</select>
		</div>
		<div class="row">注册时间：<?php echo $row['regtime']; ?></div>
		<div class="row"><input type="button" value="完成" id="btn"></div>
	</div>
</form>
</body>
</html>