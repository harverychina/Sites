<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jquery $get function</title>
	<script src="jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$(function() {
				$("#send").click(function() {
					$.get("get1.php", {
						username: $("#username").val(),
						content: $("#content").val()
					},function(data, textStatus) {
						$("#resTest").html(data);
					});
				})
			})
		})
	</script>
</head>
<body>
	<form action="#" id="form1">
		<p>评论：</p>
		<p>姓名：<input type="text" name="username" id="username"></p>
		<p>内容：<textarea name="content" id="content" cols="30" rows="10"></textarea></p>
		<p><input type="button" value="提交" id="send"></p>
	</form>
	<div class="comment">
		有的评论：
		<div id="resTest"></div>
	</div>
</body>
</html>