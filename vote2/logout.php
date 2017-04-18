<?php
    header('Content-type: text/html; charset=utf-8');
    include_once('config.php');
    session_destroy();
    header('location:index.php');
?>
