<?php
/*
PHP函数：完成特定功能程序组装，等待被呼呼叫（调用）
格式 
function 函数名(参数1， 参数2，...) 
{

    要执行的代码

}
注意：
当执行的代码中使用return返回值时，在调用时用使用输出类型的语句显示结果
*/

function writeName($name)
{
    // 主动输出屏幕
    // echo '姓名：'.$name;
    // 被动返回 
    return '姓名：'.$name;
}

// echo writeName('Tom');
// echo "<br />";
writeName('Jack');
?>