<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GuestBook留言板</title>
	<!-- 外部CSS文件  使用路径函数 /tp-guestbook/Public <- 大写 -->
	<link rel="stylesheet" href="/tp-guestbook/Public/CSS/style.css" type="text/css">
	<script src="/tp-guestbook/Public/JS/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			$(".btn").focus();
			$(".btn").click(function(){
				var msg = $("#msg").val();
				if(msg == "") {
					alert("请正确填写发布内容");
					$("#msg").focus();
					return false;
				}
			});
		})
	</script>
</head>
<body>
	<div class="wrap">
		<div class="header">
			<h3>GuestBook留言板</h3>
		</div>
		<div class="sider">
			<?php if((session('id') == '')): ?><ul>
					<li><a href="/tp-guestbook/index.php/Home/Index/login">登录</a></li>
					<li><a href="/tp-guestbook/index.php/Home/Index/reg">注册</a></li>
				</ul>
			<?php else: ?>
				<ul>
					<li><a href="#"><?php echo session('id');?></a></li>
					<li><a href="/tp-guestbook/index.php/Home/Index/logout">登出</a></li>
				</ul><?php endif; ?>
		</div>
		<div class="center">
			<div class="messages">
				<?php if(is_array($msg_info)): $i = 0; $__LIST__ = $msg_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p>作者: <?php echo ($vo["author"]); ?></p>
					<p>内容: <?php echo ($vo["msg"]); ?></p>
					<p>时间: <?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></p>
					<hr><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="send">
				<form method="POST" action="/tp-guestbook/index.php/Home/Index/send">
					<textarea name="msg" id="msg" cols="80" rows="5"></textarea>
					<input type="submit" class="btn" value="发表">
				</form>
			</div>
		</div>
		<div class="footer">
			<p>WEB功能模块开发（原生）实例</p>
		</div>
	</div>
</body>
</html>