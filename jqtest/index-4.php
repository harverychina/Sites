<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jq30-test-4</title>
    <script src="jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#bt").click(function() {
            $.get("test1.txt", function(data, status) {
                alert("data:" + data + "\nStatus:" + status);
            })
        })
    })
    </script>
</head>
<body>
    <input type="button" value="查看结果" id="bt">
</body>
</html>