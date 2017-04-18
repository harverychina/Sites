<?php
include_once('db.inc.php');
$sql = "SELECT `id`, `title`, `create_time` FROM message ORDER BY `id` DESC";
// echo $sql;exit;
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
    <style>
    /* 样式 */
    * {
        margin: 0; padding: 0;
    }
    #wrap {
        width: 600px;
        padding: 10px;
        margin: 0 auto;
        text-align: center;
    }
    a {
        text-decoration: none;
        color: #ccc;
        font-weight: blod;
    }
    a:hover {
        text-decoration: underline;
        color: red;
    }
    h4 {
        height: 25px;
        line-height: 25px;
        padding: 5px;
        font-weight: 300;
        font-size: 18px;
    }
    #title {
        width: 600px;
        height: 30px;
        line-height: 30px;
        border-radius: 20px;
        border: 1px dashed #090;
        margin: 20px; 
        text-indent: 1.5em;
        padding: 5px;
    }
    #content {
        width: 600px;
        height: 65px;
        border-radius: 30px;
        border: 1px dashed #090;
        resize: none;
        padding: 25px;
    }
    button {
        width: 65px;
        height: 25px;
        line-height: 25px;
    }
    #result {
        width: 600px;
        padding: 5px;
        margin: 20px;
    }
    #result p {
        height: 30px;
        line-height: 30px;
        border-bottom: 1px dashed #090;
    }
    #msg-title, #msg-time {
        font-size: 14px;
        color: #bbb;
        text-align: left;
    }
    #msg-title {
        float: left;
        width: 80%;
        padding-left: 5px;
    }
    #msg-time {
        float: right;
        width: 15%;
    }
    </style>
    <script>
    // 前端脚本
    function checkForm() {
        // 从表单获取元素值
        var content = document.getElementById('content').value;
        var title = document.getElementById('title').value;
        if(title == '' || title == null) {
            alert('当前输入标题不能为空！');
            // focus() 焦点
            document.getElementById('title').focus();
            // 暂停程序执行
            return false;
        }
        if(content == '' || content == null) {
            alert('当前输入内容不能为空！');
            // focus() 焦点
            document.getElementById('content').focus();
            // 暂停程序执行
            return false;
        }
    }
    </script>
</head>
<body>
    <div id="wrap">
        <form action="get.php">
            <h4>留言板（数据库方式）</h4>
            <input type="text" name="title" id="title" placeholder="请输入标题.....">
            <textarea name="content" id="content" placeholder="请输入留言......"></textarea>
            <!--<input type="button" value="提交">-->
            <button onClick="return checkForm();">提交</button>
        </form>
        <div id="result">
        <?php while($row = $result->fetch_assoc()) { ?>
            <p>
                <span id="msg-title"><a href="show.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></span>
                <span id="msg-time"><?php echo $row['create_time'];?></span>
            </p>
        <?php } ?>
        </div>
    </div>
</body>
</html>