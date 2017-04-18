<?php
session_start();
header("Content-type:text/html; charset=utf8");
$link = new mysqli('localhost', 'root', '', 'book');
if($link->connect_errno) {
    die('database error!').$link->connect_error();
} else {
    $link->set_charset('utf8');
}
?>