<?php
// 当前文件路径（不包含域名）
echo $_SERVER['PHP_SELF'];
echo "<br />";
// 当前服务器域名
echo $_SERVER['SERVER_NAME'];
echo "<br />";
// 当前服务器域名
echo $_SERVER['HTTP_HOST'];
echo "<br />";
// 当前文件路径（包括域名）
echo $_SERVER['HTTP_REFERER'];
echo "<br />";
// 当前浏览器版本和名称
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br />";
// 当前脚本名称(带路径)
echo $_SERVER['SCRIPT_NAME'];
echo "<br />";
// 当前脚本提交数据方式 method
echo $_SERVER["REQUEST_METHOD"]; 