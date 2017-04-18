<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板（文本）</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function checkForm() {
            var content = document.getElementById('content').value;
            if(content == null || content == "") {
                document.getElementById('msg').innerHTML='留言内容不能为空！';
                document.getElementById('content').focus();
                return false;
            }
        }
    </script>
</head>
<body>
    <div id="wrapper">
        <h3>留言板</h3>
        <form action="get.php">
            <textarea name="content" id="content"></textarea>
            <div id="msg"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?></div>
            <input type="submit" id="btn" name="btn" onclick="return checkForm()">
            <div id="result"><?php if(isset($_GET['content'])) echo "<p>内容：".$_GET['content']."</p><p>时间：".date("Y-m-d H:i:s", $_GET['time'])."</p>";?></div>
        </form>
    </div>
</body>
</html>