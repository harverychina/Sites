<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/10/27
 * Time: 上午9:54
 */
include_once('libs/config.php');
session_destroy();
header('location: index.php');
?>