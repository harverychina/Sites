<?php
if(isset($_GET['op']) && isset($_GET['id']) && isset($_GET['mid'])) {
    $id = $_GET['id'];
    $mid = $_GET['mid'];

    include_once('db.inc.php');
    switch ($_GET['op']) {
        case '1':
            // 赞成
            $sql = "UPDATE `comment` SET `islike` = `islike` + 1 WHERE `id`='$id'";
            // echo $sql;exit;
            break;
        case '2':
            // 反对
            $sql = "UPDATE `comment` SET `dislike` = `dislike` + 1 WHERE `id`='$id'"; 
            // echo $sql;exit;
            break;
    }
    $conn->query($sql);
    echo "<script>alert('点评成功！');</script>";
}
echo "<script>window.location.href='show.php?id=$mid';</script>";
?>