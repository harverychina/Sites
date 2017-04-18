<?php
/**
 * link database for mysqli
 */
header("Content-type:text/html; charset=utf-8");
$link = new mysqli('localhost', 'root', '123456', 'vote1');
//var_dump($link);
if($link->connect_errno) {
    echo 'Connect Error!'.mysqli_connect_error();
}
$link -> set_charset('utf8');
/* else {
    echo 'Success...';
}*/

?>
