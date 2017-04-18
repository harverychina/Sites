<?php
session_start();
header("Content-type:text/html; charset='utf-8'");
// var_dump($_POST);exit;
/**
 * 投票的号码是否存在?
 */
if(isset($_SESSION['flag']) && $_SESSION['flag'] == 1) {

	if(isset($_POST['num'])) {
		/**
		 * 判断值空
		 */
		if($_POST['num']) {
			/**
			 * 处理投票
			 */
		  // var_dump(require_once('conn/conn.php'));exit;
			require_once('conn/conn.php');

		  $sql = "SELECT * FROM `vote_info` WHERE id='".$_POST['num']."' AND flag=1";
		  // echo $sql;exit;
			$result = $link -> query($sql);
			// var_dump($result);exit;
			if($result) {
				// 处理票数自增1
				$sql = "UPDATE `vote_info` SET `number` = `number` + 1 WHERE `id`='".$_POST['num']."'";
				// echo $sql;exit;
	                        $row = $link -> query($sql);
				if($row) {
					$arr['success'] = 1;
					$arr['msg'] = '投票成功！';
				} else {
					$arr['success']  =0;
					$arr['msg'] = '投票失败！';
				}

			} else {
				$arr['success'] = 0;
				$arr['msg'] = '投票失败！';
			}

		} else {
			$arr['success'] = 0;
			$arr['msg'] = '投票失败！';
		}
	} else {
		$arr['success'] = 0;
		$arr['msg'] = '投票失败！';
	}
} else {
	$arr['success'] = 2;
	$arr['msg'] = '用户已投票！';
}
echo json_encode($arr);
?>
