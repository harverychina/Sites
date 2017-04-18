<?php
	/**
	 * 学习内容
	 * 1. php 到底是什么？
	 * 2. php 与 html文件有什么区别？
	 * 3. php 在网页中起什么作用？
	 * 4. php 常用函数 var_dump() / isset() / empty() / is_null()
	 * 5. php 判断语句 if / switch .. case
	 *
	 */
	 
	 $name = '张小明';
	 var_dump($name);
	 echo "<br />";
	 if(isset($name))
	 	echo '变量name已经设置好了';
	 else
	 	echo '变量name没有设置';
	
	 echo "<br />";

	 switch ($name) {
		 case '张小明':
			 echo $name;
			 break;
		 case '李大虎':
			 echo $name;
			 break;
		 default:
			 echo '没有名字';
			 break;
			 break;
	 }
?>