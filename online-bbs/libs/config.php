<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/10/26
 * Time: 上午9:59
 */
session_start();
header("Content-type: text/html; charset=utf8");
$link = new mysqli('localhost', 'root', '123456', 'online_bbs');
if($link->connect_error) {
    die('Connect error('.$link->connect_errno.')'.$link->connect_error);
}
$link->set_charset('utf8');
?>