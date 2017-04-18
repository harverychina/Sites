<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/11/2
 * Time: 上午8:55
 */
//var_dump($_POST);
$arr['msg'] = $_POST['message'];
$arr['success'] = 1;
echo json_encode($arr);
?>