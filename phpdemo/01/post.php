<?php
header("Content-Type: 'text/html', charset='utf8'");
$link = new mysqli('localhost', 'root', '123456', 'guestbook');
$link->set_charset('utf8');
$sql = "SELECT * FROM `messages` Limit {$_POST['min']}, {$_POST['max']}";
$result = $link->query($sql);
$arr['length'] = $result->num_rows;
while($row = $result->fetch_assoc()){
	$arr['info'][] = $row;
}
echo json_encode($arr);
?>