<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线调查</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		#wrapper {
			margin: 0 auto;
			padding: 20%;
			width: 200px;
		}
		h3 {
			text-align: center;
		}
		form {
			padding: 12px;
		}
		#foots {
			margin: 0 5px;
		}
	</style>
</head>
<body>
	<div id="wrapper">
	<h3>你喜欢什么水果？</h3>
		<form action="get.php">
			苹果<input type="radio" name="foots" id="foots" value="1">
			香蕉<input type="radio" name="foots" id="foots" value="2">
			雪梨<input type="radio" name="foots" id="foots" value="3">
			<input type="submit" value="提交">
		</form>
	</div>
</body>
</html>