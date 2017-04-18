<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文件读写操作---实例</title>
    <script>
    function checkForm() {
        var name = document.getElementById('name').value;
        var age = document.getElementById('age').value;
        // alert(name);
        // return false;
        if (name == '' || name == null) {
            document.getElementById('name').focus();
            alert('学生姓名不能为空！');
            return false;
        }
        if (age == '' || age == null) {
            document.getElementById('age').focus();
            alert('学生年龄不能为空！');
            return false;
        }

    }
    </script>
</head>
<body>
    <h4>登记学生资料</h4>
    <form action="write.php">
        姓名：<input type="text" id="name" name="name"><br />
        年龄：<input type="text" id="age" name="age"><br />
        <button onclick="return checkForm()">提交</button>
    </form>
</body>
</html>