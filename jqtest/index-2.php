<!-- jQuery3 简易使用class方式去隐藏或者采用先隐藏（不使用css代码），在调用show。 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jq30-test-2</title>
	<style>
		#txt { display: none; }
	</style>
	<script src="jquery-3.0.0.min.js"></script>
	<script>
		$('#txt').show();
		/*$(document).ready(function(){
			$('.txt').hide();
			$('.btn').click(function() {
				if($('.btn').val() == 'hide') {
					$('.txt').hide();
					$('.btn').val('display');
				} else {
					$('.txt').show();
					$('.btn').val('hide');
				}
			});
		})*/
	</script>
</head>
<body>
	<input type="text" name="" id="txt">
	<!-- <input type="text" name="" class="txt" value=""> -->
	<!-- <input type="button" value="display" class="btn"> -->
</body>
</html>