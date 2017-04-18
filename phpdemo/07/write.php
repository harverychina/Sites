<?php
/*
    file 函数 
    file_exists(文件名)，用于判断文件是否存在
    fopen(文件名)，创建文件或打开文件，并设置对文件的读写和追加等权限
    fwrite(文件名)，写内容到文件
    '\n' 与 换行符一样，但只能在文本或命令行有效
*/
$name = $_GET['name'];
$age = $_GET['age'];

if (!file_exists('content.txt')) {
    // 当文件不存在时，创建文件并命名位content.txt
    // 在有权限的操作系统中(Linux,Unix)，
    // 要设置一下权限开通读写 建议是 777 / 665
    $fp = fopen('content.txt', 'wr', true);
} else {
    $fp = fopen('content.txt', 'ab', true);
}

$content = '姓名：'.$name.'，年龄：'.$age."\n";
fwrite($fp, $content);
fclose($fp);
echo "<a href='read.php'>查看文件内容</a>";