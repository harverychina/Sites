<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>简易留言板</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		body {
			font-size: 14px;
			font-weight: 100;
		}
		#wrapper {
			margin: 0 auto;
			padding: 20%;
			text-align: center;
			width: 280px;
		}
		h3 {
			padding: 10px 0;
		}
		#content {
			height: 65px;
			padding: 10px;
			resize: none;
			width: 260px;
		}
		#btn {
			background-color: red;
			border: 1px solid #ccc;
			color: white;
			height: 28px;
			margin: 5px 0;
			width: 45px;
		}
		#rs {
			font-size: 16px;
			height: 65px;
			text-align: left;
			word-wrap: break-word;
		}
	</style>
	<script type="text/javascript">
		function validate() {
			var content = document.getElementById('content').value;

			if (content == null || content == "") {
				alert('留言内容不能为空！');
				document.getElementById('content').focus();
				return false;
			}
				document.getElementById('myform').submit();
		}
	</script>
</head>
<body>
	<div id="wrapper">
		<h3>留言板</h3>
		<form action="get.php" method="get" id="myform">
			<textarea name="content" id="content"></textarea>
			<input type="button" value="提交" id="btn" onClick="return validate();">
		</form>
		<?php if(isset($_GET['rs'])) { ?>
		<h3>留言内容</h3>
		<p id="rs"><?php echo $_GET['rs']; ?></p>
		<?php } ?>
		<!-- 备选 -->
		<!--<div id="rs"><?php if(isset($_GET['rs'])) echo '结果是：'.$_GET['rs'];?></div>-->
	</div>
</body>
</html>