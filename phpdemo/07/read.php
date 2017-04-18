<?php
/*
  feof(文件名)，用于判断文件内容是否读取到文件末尾
  fgets(文件名)，用于获取文件内容

*/
$fp = fopen('content.txt', 'rb');
while (!feof($fp)) {
    $new = fgets($fp);
    echo  $new."<br/>";
}
echo "<a href='index.php'>返回</a>";