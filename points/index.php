<?php
/**
 * ===============================================
 * Program : memeber points 会员积分管理
 * author : 聪少Harry
 *  time  2016-6-17
 *  Description : 
 *     1. 显示用户头像
 *     2. 显示用户资料
 *     3. 显示用户积分、用户成长值和物品兑换等
 *     4. 显示用户积分进账和出账情况（即：积分流水账）
 * ===============================================
 */
require_once('./conn/conn.php');
/*$sql = 'SELECT * FROM member';
$result = $link->query($sql);
var_dump($result);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员积分</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/my.js"></script>
</head>
<body>
	<!-- 背景 wrapper -->
	<div class="wrapper">
	<!-- 主体内容 container -->
		<div class="container">
			<!-- 头部 header -->
			<header>
				<h3>会员积分</h3>
			</header>
			<!-- 内容 content -->
			<div class="content">
				<div class="left"> 
					<img src="./images/" id="header_img">
					<p>张三</p>
					<ul>
						<li><a href="#">签到</a></li>
						<li><a href="#">会员资料</a></li>
						<li><a href="#">成长值</a></li>
						<li><a href="#">会员币</a></li>
						<li><a href="#">兑换</a></li>
					</ul>
				</div>
				<div class="right">
					<div class="content">
						<div class="row">
							<h3>当前首次登录时间：</h3>
						</div>
						<div class="row">
							<h3>当前积分排名:</h3>
						</div>
						<div class="row">
							<h3>总积分：</h3>
						</div>
						<div class="row">
							<h3>以下是可兑换物品</h3>
							<ul>
								<li><img src="">手机壳</li>
								<li><img src="">手机膜</li>
								<li><img src="">充电线</li>
								<li><img src="">充电宝</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>