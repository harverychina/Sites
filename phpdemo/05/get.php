<?php
//var_dump($_GET);
if(isset($_GET['content'])) {

        $content = $_GET['content'];
        date_default_timezone_set('PRC');
        $time = time();
        $w = "{$content}###{$time}@@@";
        $txt = file_get_contents('content.txt');
        file_put_contents('content.txt', $w);
        $msg = '留言成功！';
        header("location: index.php?msg=$msg&time=$time&content=$w");

} else {
    header('location: index.php');
}