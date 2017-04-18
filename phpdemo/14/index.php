<?php
// config file for link database.
include_once('db.inc.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database ex-1 数据库练习1</title>
    <script>
    function checkForm() {
        // check form data
        var key = document.getElementById('key').value;

        if(key == "" || key == null) {
            alert('Search data key is empty!');
            document.getElementById('key').focus();
            return false;
        }
    }
    </script>
</head>
<body>
    <div id="search_bar">
        <form>
            查询：<input type="text" id="key" name="key"><button onclick="return checkForm();">提交</button>
        </form>
    </div>
    <div id="result"></div>
</body>
</html>