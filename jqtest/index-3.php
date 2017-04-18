<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jq30-test-3</title>
	<script src="jquery-3.0.0.min.js"></script>
	<script>
	$(document).ready(function() {
		$("form").bind("submit", function () {
			var reg = /^1[3458]\d{9}$/;
			var mobile = $('#txt').val();
			if(!(reg.test(mobile))) {
				alert('error');
				return false;
			}
		});
	});
	</script>
</head>
<body>
	<form>
		<input type="text" id="txt" value="" placeholder="请输入手机号码"><input type="submit" value="验证">
	</form>
</body>
</html>