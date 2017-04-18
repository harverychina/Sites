<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jq30-test-1</title>
	<script src="jquery-3.0.0.min.js" type="text/javascript"></script>
	<script>
		$.ready.then(function() {
			throw new Error('出错了');
			$("#container").html('您好！');
		}).fail(function(error) {
			throw error;
		}); 
	</script>
</head>
<body>
	<div id="container"></div>
</body>
</html>