<?php
class myClass {
	function __construct() {
		print "Hi"."<br>";
	}

	function __destruct() {
		print "Bye"."<br>";
	}
}

$class1 = new myClass();
?>