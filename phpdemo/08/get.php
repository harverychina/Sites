<?php
// 编码设置
header("Content-Type: text/html; Charset='utf8'");
$str = array('苹果', '雪梨', '芒果', '香蕉', '橙子', '菠萝', '西瓜', '橘子', '葡萄', '草莓');
$key = htmlspecialchars($_GET['key']);
$num = $_GET['num'];
// print_r($key);

// for 语句
/*for($i=0; $i<$num; $i++) {

    echo $key.$str[$i]."<br />";
    
}*/

// while 语句
/*$i = 0;
while($i < $num) {
    echo $key.$str[$i]."<br />";
    $i ++;
}*/

// do while 语句
/*$i = 0;
do {
    echo $key.$str[$i]."<br />";
    $i ++;
} while($i < $num);*/

// foreach语句
foreach ($str as $value) {
    echo $key.$value."<br />";
}
