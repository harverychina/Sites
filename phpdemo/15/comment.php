<?php
if(isset($_GET['mid']) && isset($_GET['comment_content'])) {
    // 防止通过URL直接访问 comment.php
    include_once('db.inc.php');
    $mid = $_GET['mid'];
    $comment_content = $_GET['comment_content'];
    date_default_timezone_set('PRC');
    $date = date('Y-m-d');
    $sql = "INSERT INTO `comment` VALUES(null, '$mid', '$comment_content', 0, 0, '$date')";
    // echo $sql;exit;
    if($result = $conn->query($sql)) {
        echo "<script>alert('评论成功！');</script>";
    }
    echo "<script>window.location.href='show.php?id=$mid';</script>";
} else {
    header('location:index.php');
}
?>