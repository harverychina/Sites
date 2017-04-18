<?php
// __FILE__ 返回文件路径
echo '当前文件来自于：'. __FILE__.'<br />';
// __DIR__ 返回文件目录
echo '当前文件目录是：'.__DIR__.'<br />';
// 在函数中使用的魔术变量，主要输出当前函数名  __FUNCTION__ 
function sayHello () {
    echo '当前是函数名为：'.__FUNCTION__.'<br />';
}
sayHello();
// 在当前类中输出类的名称  __CLASS__
class sayToclass
{
    public function oputString() 
    {
        echo '当前类名称为：'.__CLASS__."<br />";
    }
}
$newClass = new sayToclass();
$newClass->oputString();
// 输出当前的表单传送数据方式
class sayMethod
{
    public function oputMethod()
    {
        echo '当前method是：'.__METHOD__.'<br />';
    }
}
$method = new sayMethod();
$method->oputMethod();


// change-case 驼峰命名法插件
?>