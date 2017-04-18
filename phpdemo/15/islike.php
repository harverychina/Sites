<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    include_once('db.inc.php');
    $sql = "UPDATE `message` SET `islike` = `islike` + 1 WHERE `id` = '$id'";
    // echo $sql;exit;
    if($result = $conn->query($sql)) {
        echo "<script>alert('点赞成功！');</script>";
    }
}
echo "<script>window.location.href='show.php?id=$id';</script>";
?>
