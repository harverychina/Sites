<?php
/**
 * 类的访问控制
 *  public（公有），protected（受保护）或 private（私有）
 *  public 和 protected 可以重新定义，而 prviate 是不能重新定义!
 */
class A{
	public $str1 = 'hello';
	protected $str2 = 'hi';
	private $str3 = '哈喽';

	public function sayhi() {
		echo $this->str1;
		echo $this->str2;
		echo $this->str3;
	}
}

class B extends A{
	protected $str3 = 'halou';

	public function printhi() {
		echo $this->str1;
		echo $this->str2;
		echo $this->str3;
	}
}
// $a = new A();
// echo $a->str1;
// echo $a->str2; // 致命错误，无法显示
// echo $a->str3; // 致命错误，无法显示
// echo $a->sayhi();
$b = new B();
// echo $b->str1;
// echo $b->str2;  // 错误
// echo $b->str3;  // 错误
echo $b->printhi();

?>