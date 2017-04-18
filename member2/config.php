<?php
session_start();
$link = new mysqli('localhost', 'root', '123456', 'member');
if($link->connect_error) {
   die('Connect Error (' . $link->connect_errno .') ' . $link->connect_error);
}
?>