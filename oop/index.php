<?php
include('conn.php');
$link = new mysql_connect();
// var_dump($link);
$result = $link->getDate("SELECT * FROM vote_info");
// var_dump($result);
/**
 * 通过类查询数据数组方法得到结果，并输出表格数据
 */
echo "<table style='text-align:center'>";
echo '<tr>';
echo '<th>序号</th>';
echo '<th>姓名</th>';
echo '<th>性别</th>';
echo '<th>现任职位</th>';
echo '<th>竞选职位</th>';
echo '<th>票数</th>';
echo '</tr>';
foreach($result as $v) {
	echo '<tr>';
	echo '<td>'.$v['id'].'</td>';
	echo '<td>'.$v['name'].'</td>';
	if($v['gender'] == 1){
		echo '<td>男</td>';
	} else {
		echo '<td>女</td>';
	}
	echo '<td>'.$v['now_posit'].'</td>';
	echo '<td>'.$v['run_posit'].'</td>';
	echo '<td>'.$v['number'].'</td>';
	echo '</tr>';
}
echo '</table>';

?>