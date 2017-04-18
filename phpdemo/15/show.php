<?php
if(!isset($_GET['id'])) {
    header('location:index.php');
} else {
    include_once('db.inc.php');
    $sql = "SELECT * FROM `message` WHERE `id`='".$_GET['id']."'";
    // echo $sql;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // 读取评论数据
    $sql = "SELECT * FROM `comment` WHERE `mid` = '".$_GET['id']."' ORDER BY `date` DESC";
    // echo $sql;
    $comment_result = $conn->query($sql);
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row['title'];?></title>
    <style>
    * { margin: 0; padding: 0;}
    #show-wrap { width: 400px; margin: 0 auto; padding: 10% 0; }
    p { padding: 10px 0; }
    #title { height: 30px; line-height: 30px; font-size: 18px; color: red; }
    #content { width: 100%; font-size: 14px; word-break;:break-all; text-indent: 1.5em; }
    #islike { font-size: 12px;}
    #create_time, #update_time { width: 200px; font-size: 12px; color: #090;}
    #create_time { float: left; }
    #update_time { float: right; }
    p a { font-size: 12px; color: red; text-decoration: none; padding-right: 15px;}
    p a:hover { text-decoration: underline; }
    #comment {
        width: 400px;
    }
    #comment #comment_content {
        width: 100%;
        height: 65px;
        border: 1px dashed #ccc;
        display: block;
        resize: none;
        padding: 8px;
    }
    #btn {
        width: 55px;
        height: 30px;
        margin: 5px 0;
    }
    #comment_row {
        height: 45px;
    }
    #comment_content, #comment_time {
        display: inline-block;
        float: left;
    }
    #comment_content {
        width: 100%;
        font-size: 12px;
    }
    #comment_time {
        font-size: 10px;
        color: #ccc;
    }
    #comment_like {
        float: right;
    }
    #comment_like a {
        text-decoration: none;
    }
    #comment_like a:hover {
        text-decoration: underline;
    }
    </style>
    <script>
    function checkForm() {
        var comment_content = document.getElementById('comment_content').value;
        // alert(comment_content);
        if(comment_content == '' || comment_content == null) {
            alert('评论内容不能为空！');
            document.getElementById('comment_content').focus();
            return false;
        }
    }
    </script>
</head>
<body>
    <div id="show-wrap">
        <p id="title"><?php echo $row['title'];?></p>
        <p id="content"><?php echo $row['content'];?></p>
        <p id="islike"><a href="islike.php?id=<?php echo $row['id'];?>">[点赞]</a><?php if($row['islike'] != 0) echo '['.$row['islike'].'票]';?></p>
        <p id="create_time">发布时间：<?php echo $row['create_time'];?></p>
        <p id="update_time">更新时间：<?php echo $row['update_time'];?></p>
        <p><a href="index.php">返回主页</a><a href="del.php?id=<?php echo $row['id'];?>">删除</a></p>
        <form action="comment.php">
            <div id="comment">
                <textarea name="comment_content" id="comment_content" placeholder="请输入评论......"></textarea>
                <input type="hidden" name="mid" value="<?php echo $row['id'];?>">
                <button id="btn" onClick="return checkForm();">提交</button>
            </div>
            <?php
            while($comment_row = $comment_result->fetch_assoc()) {
            ?>
                <p id="comment_row"><span id="comment_content"><?php echo $comment_row['content'];?></span><span id="comment_time"><?php echo $comment_row['date'];?></span><span id="comment_like"><a href="comment_review.php?op=1&&id=<?php echo $comment_row['id'];?>&&mid=<?php echo $row['id'];?>">[赞同][<?php echo $comment_row['islike'];?>]</a><a href="comment_review.php?op=2&&id=<?php echo $comment_row['id'];?>&&mid=<?php echo $row['id'];?>">[反对][<?php echo $comment_row['dislike'];?>]</a></span></p>
            <?php
            }
            ?>
        </form>
    </div>
</body>
</html>
<?php } ?>