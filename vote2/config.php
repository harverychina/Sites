<?php
    session_start();

    header("Content-type: text/html; charset=utf-8");

    $link = new mysqli('localhost','root','123456','vote');

    if($link->connect_error) {
        die('Connect Error('. $link->connect_errno .')' .$link->connect_error);
    }
    $link->set_charset('utf8');
?>
