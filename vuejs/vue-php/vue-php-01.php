<?php
/**
 * Created by PhpStorm.
 * User: huangjiancong
 * Date: 2016/11/2
 * Time: 上午8:15
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vue-php-01</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        body, html {
            font-family: 'Lucida Grande', Verdana, Geneva, Lucida, Arial, Helvetica, sans-serif;
            font-size: 14px;
        }
        #wrap {
            width: 300px;
            margin: 0 auto;
        }
        form {
            padding: 30px 0;
        }
        textarea {
            width: 300px;
            height: 85px;
            resize: none;
            font-size: 14px;
            text-indent: 1.5px;
            padding: 5px;
        }
    </style>
</head>
<body>
<div id="wrap">
    <form method="post" id="send-form">
        <textarea name="message" id="message" v-model="message"></textarea>
        <input type="button" value="Submit" id="send-btn" v-on:click = "send">
        <div v-show="message.length>180">发布信息字数不得超过180字符</div>
        <div v-show="!message">发布信息不能空！</div>
<!--        <pre>{{ $data | json }}</pre>-->
    </form>
</div>
<script src="vue.js"></script>
<script src="jquery.min.js"></script>
<script>
    new Vue({
        el: "#wrap",
        data: {
            message : "",
        },
        methods: {
            send : function () {
                var data = $("#message").val();
                if(data == '') {
                    alert('发布信息不能空！');
                    $("#message").focus();
                    return false;
                }
                $.ajax({
                    type: 'post',
                    url: 'post.php',
                    dataType: 'json',
                    data: { message : data },
                    success: function (json) {
                        if(json.success == 1) {
                            alert(json.msg);
                        }
                    }
                })
            }
        }
    })
</script>
</body>
</html>
