<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>循环显示制定内容</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function checkForm() {   
            var key = document.getElementById('key').value;
            if (key == "" || key == null) {
                document.getElementById('key').focus();
                alert('内容不能为空！');
                return false;
            }
        }
    </script>
</head>
<body>
    <form action="get.php">
        内容：<input type="text" id="key" name="key">
        次数：<select name="num" id="num">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <button id="btn" onclick="return checkForm()">提交</button>
    </form>
</body>
</html>