<?php
/**
 * oop 面向对象写法
 * msyqli链接mysql
 * @mysql_conn 自定义连接函数, 继承 mysqli
 * @同时使用 mysqli 初始化连接
 * @报错使用 mysqli 的错误函数和提示
 */

class mysql_conn extends mysqli {
	public function __construct($host, $user, $pass, $db) {
		parent:: __construct($host, $user, $pass, $db);

		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_error().')'. mysqli_connect_error());
		}
	}
}
?>