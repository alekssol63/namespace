<?php
namespace Passtranceiver;
interface passtrancint{
	public function transmittodriver($obj);
	public function transmittopassenger($obj);
	
}
class Passtranceiver implements passtrancint{	
	public $name='Пассажир';
	public function __construct($name){
		$this->name=$name;
	}
	public function transmittodriver($obj){
		echo $this->name ." взял деньги." . $obj->name .", возьмите за проезд." ."</br>";
		$obj->takemoneyfortransit();
	}
	public function transmittopassenger($obj){
		echo $this->name .":"." Пассажир, возьмите сдачу." ."</br>";
		$obj->takesdacha();
	}
}