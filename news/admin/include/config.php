<?php

session_start();

header('Content-type:text/html; charset=utf8');

//$link = new mysqli('localhost', 'root', '123456', 'news');

$link = new mysqli('localhost', 'root', '', 'news');

if($link->connect_error) {

    die('Connect Error('. $link->connect_errno .')' .$link->connect_error);

} else {

	$link->set_charset('utf8');
}

?>