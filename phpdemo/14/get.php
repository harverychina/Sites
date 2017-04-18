<?php
include_once('db.inc.php');
// stu_basic
// $sql = "SELECT * FROM `stu_basic` WHERE `name` = '".$_GET['key']."'";
$sql = "SELECT `name`,`gender`,`className` FROM `stu_basic` WHERE `name` = '".$_GET['key']."'";

?>