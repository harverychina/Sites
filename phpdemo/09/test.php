<?php
/*
通常下面的一些方式，$_SERVER['HTTP_REFERER'] 会无效：
    1.直接输入网址访问该网页。
    2.Javascript 打开的网址。
    3.Javascript 重定向（window.location）网址。
    4.使用 meta refresh 重定向的网址。
    5.使用 PHP header 重定向的网址。
    6.flash 中的链接。
    7.浏览器未加设置或被用户修改。
*/
echo "<a href='index.php'>链接</a>";