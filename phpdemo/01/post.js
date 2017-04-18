$(document).ready(function(){
	$('#btn').click(function(){
		$.ajax({
			type: 'post',
			url: 'post.php',
			dataType: 'json',
			data:{ min: 0 , max: 10},
			success: function(json){
				for (var i=0; i<json.length; i++) {
					$(".content>ul").append("<li>" + json.info[i]['id']+ "、" + json.info[i]['msg'] + Date(json.info[i]['time']) +"</li>");
				}
			}
		});
	});
});