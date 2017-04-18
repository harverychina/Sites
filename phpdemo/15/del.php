<?php
if(!isset($_GET['id'])){
    echo "<script>alert('非法操作！');window.location.href='index.php';</script>";
} else {
    include_once('db.inc.php');
    $sql = "DELETE FROM `message` WHERE id ='".$_GET['id']."'";
    if($result = $conn->query($sql)) {
        // 删除成功
        echo "<script>alert('删除成功！');window.location.href='index.php';</script>";
    } else {
        // 删除失败
        echo "<script>alert('删除失败！');window.location.href='index.php';</script>";
    }
}
?>