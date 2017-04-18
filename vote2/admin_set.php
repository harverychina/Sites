<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员界面</title>
	<link rel="stylesheet" href="admin_set.css">
	<script src="jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#add').click(function(){
				var userid = $('.userid').val();
				if(userid != ''){
					$.ajax({
						type: 'post',
						url: 'add.php',
						dataType: 'json',
						data: {userid: userid},
						success: function(json){
							if(json.success == 1) {
								alert(json.msg);
								window.location.href = "index.php";
							} else {
								alert(json.msg);
								$('.userid').focus();
								return false;
							}
						}
					})
				} else {
					alert('投票内容不能为空！');
					$('.classid').focus();
					return false;
				}
			})
			$('#exit').click(function(){
				window.location.href = 'logout.php';
			})
		})
	</script>
</head>
<body>
	<form method="post">
		<h3>添加候选人</h3>
		候选人姓名：<input type="text" name="userid" class="userid">
		<input type="button" value="添加" id="add">
		<input type="button" value="退出" id="exit">
	</form>
</body>
</html>
