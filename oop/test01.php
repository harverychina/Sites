<?php
class math {
	public function __construct($num1, $num2) {
		$this->num1 = $num1;
		$this->num2 = $num2;
	}
	public function add(){
		return $sum = $this->num1 + $this->num2;
	}
}
$num1 = 1;
$num2 = 3;
$math1 = new math(1, 3);
echo $num1.'+'.$num2.'='.$math1->add();
?>
