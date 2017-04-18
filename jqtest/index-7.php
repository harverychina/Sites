<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP+MYSQL+jQuery+AJAX 聊天室</title>
	<style>
		#messagewindow { height: 300px; width: 300px; border: 1px solid #bbb; }
		#messagewindow span { height: 20px; line-height: 20px; padding: 5px; }
	</style>
	<script src="jquery.min.js"></script>
	<script>
	$(function() {
		$("#btn").click(function() {
			var author = $("#author").val();
			var msg = $("#msg").val();
			if(author == "" || msg == "") {
				// $("#messagewindow").html('发布内容不能为空！').fadeOut();
				alert('发布内容不能为空！');
				return false;
			}
			$.ajax({
				type: 'post',
				url: 'backend.php',
				dataType: 'json',
				data: {author: author, msg: msg},
				success: function(data) {
					if(data.success == 1) {
						alert(data.msg);
						$("#messagewindow").append("<span>"+ author +"：</span><span>"+ msg +"</span><br />");
						// window.location.href='index-7.php';
					} else {
						alert(data.msg);
						return false;
					}
				}
			});
		})
	})
	</script>
</head>
<body>
	<div id="wrapper">
		<p id="messagewindow"></p>
		<form>
			姓名：<input type="text" id="author"><br>
			内容：<input type="text" id="msg"><br>
			<input type="button" value="发送" id="btn"><br>
		</form>
	</div>
</body>
</html>