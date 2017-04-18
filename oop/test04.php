<?php
/**
 * 定义一个员工类 employ
 * 类里面有三个属性：员工名 name 、工资 salay、奖金月数 months
 * 类里面有四个方法：获得员工名 getname 、 获得工资数目getsalay 、 获得奖金月份getmonths 、 获得奖金数目 getbonus
 */
header("Content-type:text/html; charset=utf-8");

class employ{
	public function __construct($name, $salay, $months) {
		$this->name = $name;
		$this->salay = $salay;
		$this->months = $months;
	}

	public function getName() {
		return $this->name;
	}

	public function getSalay() {
		return $this->salay;
	}

  public function getMonths() {
  	return $this->months;
  }

  public function getBonus() {
  	return $this->salay * $this->months;
  }
}
$tom = new employ('tom','1000','12');
echo $tom->getName();
echo $tom->getSalay();
echo $tom->getMonths();
echo $tom->getBonus();
?>