<?php
/**
 * 类的常量定义和使用
 */

class ABC
{
	const str = 'hello world';

	function showstr() {
		echo self::str."<br>";
	}

	function getparent() {
		return parent::str."<br>";
	}

}
// 类本身输出
echo ABC::str."<br>";

// 单引号无法解释类名ABC
// 引用类名（地址引用）
$abc = "ABC";
echo $abc::str."<br>";
// 构造新类
$newabc = new ABC();
$newabc->showstr();
// :: 直接引用类的常量，是静态调用
echo $newabc::str."<br>";
?>