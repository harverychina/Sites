<?php
include_once('libs/config.php');
if(!isset($_SESSION['id'])) {
    header('location:index.php');
}
//  当前登录用户信息
$sql = "SELECT * FROM `user` WHERE `id`= '{$_SESSION['id']}'" ;
//var_dump($user_info);exit;
$rs = $link->query($sql);
$user_info = $rs->fetch_assoc();
// 留言信息
$sql = "SELECT * FROM `messages` ORDER BY `time`";
$rs = $link->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>在线社区</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="libs/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // 判断当前内容
            $("#btn").click(function(){
                var word = $("#word").val();
                if(word == "") {
                    alert('发布内容不能空！');
                    $("#word").focus();
                    return false;
                }
                $.ajax({
                    type: 'post',
                    url: 'check_send.php',
                    dataType: 'json',
                    data: { word: word },
                    success: function (json) {
                        if(json.success == 1){
                            window.location.href = 'main.php';
                            alert(json.msg);
                        } else {
                            alert(json.msg);
                        }
                    }
                })
            })
            // 登录弹出菜单
            $("#logout_img").mouseenter(function () {
                if($(".small-menu").css("display") == 'none') {
                    $(".small-menu").css('display', 'block');
                } else {
                    $(".small-menu").css('display', 'none');
                }
            })


        })
    </script>
</head>
<body>
<div class="wrap">
    <header>
        <!-- 头像和发布文字区域 -->
        <div class="logo_area"><img src="images/01.jpg" alt="头像"><h3>在线社区</h3></div>
            <div class="head_img"><img src="<?php echo 'images/'.$user_info['img'];?>" alt="logout" id="logout_img"></div>
        <form method="post">
            <article>
               <textarea id="word"></textarea><input type="button" id="btn" value="发布">
            </article>
        </form>
    </header>
    <div class="small-menu">
        <ul>
            <li><a href="#">个人中心</a></li>
            <li><a href="logout.php">退出</a></li>
        </ul>
    </div>
    <div class="center">
        <!-- 用户写文字区域 -->
        <?php
        if($rs->num_rows){
            while($row = $rs->fetch_array()) {
                ?>
                <div class="row">
                    <div class="h_img"><img src="images/02.jpg" alt="h-img">
                        <p><?php echo $row['uid'];?></p>
                    </div>
                    <div class="content">
                        <p><?php echo $row['content'];?></p>
                    </div>
                    <div class="commit">
                        <a href="add_like.php?id=<?php echo $row['id'];?>"><img src="images/like.jpg" alt="like" id="islike"></a>
                        <p><?php echo $row['islike'];?></p>
                        <a href="add_dislike.php?id=<?php echo $row['id'];?>"><img src="images/like.jpg" alt="like" id="dislike"></a>
                        <p><?php echo $row['dislike'];?></p>
                    </div>
                </div>
         <?php }} ?>
    </div>
</div>
</body>
</html>