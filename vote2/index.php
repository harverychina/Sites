<?php
include_once('config.php');
$sql = "SELECT * FROM vote_message";
$rs = $link->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>投票主页</title>
	<link rel="stylesheet" href="index.css">
	<script src="jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".islike").click(function(){
				var id = $(".vote_key").val();
				if(id != '') {
					$.ajax({
						type: 'post',
						url: 'islike.php',
						dataType: 'json',
						data: {id: id},
						success: function(json) {
							if(json.success == 1) {
								alert(json.msg);
								window.location.href = 'index.php';
							} else {
								alert(json.msg);
								$(".vote_key").focus();
								return false;
							}
						}
					})
				} else {
					alert('序号不正确！');
					$('.vote_key').focus();
					return false;
				}
			})
			$(".dislike").click(function(){
				var id = $('.vote_key').val();
				if(id != '') {
					$.ajax({
						type: 'post',
						url: 'dislike.php',
						dataType: 'json',
						data: {id: id},
						success: function(json) {
							if(json.success == 1) {
								alert(json.msg);
								window.location.href = 'index.php';
							} else {
								alert(json.msg);
								$(".vote_key").focus();
								return false;
							}
						}
					})

				} else {
					alert('序号不正确！');
					$('.vote_key').focus();
					return false;
				}
			})
		})
	</script>
</head>
<body>
	<div class="wrap">
		<div class="top">
			<h3>投票</h3>
			<ul class="sidebar">
				<li><a href="admin_index.php">管理员入口</a></li>
			</ul>
		</div>
		<div class="content">
			<table>
				<tr>
					<th>序号</th>
					<th>投票内容</th>
					<th>赞成票</th>
					<th>反对票</th>
				</tr>
				<?php while($row = $rs->fetch_assoc()) {?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['content']; ?></td>
						<td><?php echo $row['islike']; ?></td>
						<td><?php echo $row['dislike']; ?></td>
					</tr>
				<?php } ?>
				<form method="post">
				<tr>
					<td colspan="4">投票序号：<input type="text" name="vote_key" class="vote_key"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="button" value="赞成" class="islike"></td>
					<td colspan="2"><input type="button" value="反对" class="dislike"></td>
				</tr>
				</form>
			</table>
		</div>
	</div>
</body>
</html>
