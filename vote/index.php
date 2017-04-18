<?php
/**
 * 处理用户登录后，不能重复投票
 * @var flag [int] [true / false] 投票标志
 * @var $_COOKIE['ip'] 当前用户ip
 */
session_start();

/**
 * $_COOKIE 不能直接使用
 */
if(isset($_COOKIE['ip'])) {
  $_SESSION['flag'] = 0;
} else {
  $_SESSION['flag'] = 1;
	// set cookie ip address 1 day
  setcookie('ip', $_SERVER['REMOTE_ADDR'], time()+(3600*24));
}

/*if($_SERVER['REMOTE_ADDR']) {
    echo $_SERVER['REMOTE_ADDR'];exit;
}*/

require_once('conn/conn.php');
$sql = "SELECT * FROM vote_info";
// echo $sql;exit;
$result = $link -> query($sql);
//var_dump($result);exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>在线投票</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="vote.js"></script>
</head>
<body>
	<div class="site-wrapp">
		<div class="header">
			<h3>在线投票</h3>
		</div>
		<div class="content">
				<div class="row">
				<form>
					<table>
						<caption>候选人简介</caption>
						<tr>
							<th>序号</th>
							<th>姓名</th>
							<th>性别</th>
							<th>现任职位</th>
							<th>竞选职位</th>
							<th>票数</th>
						</tr>
						<?php while($row = $result->fetch_array()){
							echo "<tr>";
							echo "<td>".$row['id']."</td>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['gender']."</td>";
							echo "<td>".$row['now_posit']."</td>";
							echo "<td>".$row['run_posit']."</td>";
							echo "<td>".$row['number']."</td>";
							echo "</tr>";
						}?>

						<tr>
							<td colspan="6">请填写候选人的序号<input type="text" id="num"><input type="button" value="投票" class="btn"></td>
						</tr>
					</table>
				</form>
				</div>
			</div>
	</div>
</body>
</html>
