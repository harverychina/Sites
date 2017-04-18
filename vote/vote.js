$(function() {
	$(".btn").click(function() {
		// alert('ok');
		var num = $("#num").val();
		// alert(num);
		// 判断是否为空和是否为数字
		/*if(num == "") {
			alert('请填写候选人序号！');
			return false;
		}
		if(isNaN(num)) {
			alert('请填写候选人序号！');
			return false;
		}*/
		if(num == "" || isNaN(num)) {
			alert('请填写候选人序号！');
			return false;
		}
		// ajax event ajax 事件
		$.ajax({
			type: 'POST',
			url: 'vote.php',
			dataType: 'json',
			data: {num: num},
			success: function(json) {
				if(json.success == 1) {
					// 投票成功
					alert(json.msg);
          window.location.href = 'index.php';
        } else if(json.success = 2) {
        	// 已投票
        	alert(json.msg);
          window.location.href = 'index.php';
				} else {
					// 投票失败
					alert(json.msg);
          window.location.href = 'index.php';
				}
			}
		});
	});
});
