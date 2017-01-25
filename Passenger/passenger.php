<?php
namespace Passenger;
interface passint{
	public function givemoney($obj);
	public function takesdacha();
	
}
class Passenger{	
	public $name='Пассажир';
	public function __construct($name){
		$this->name=$name;
	}
	public function givemoney($obj,$driver){
		echo $obj->name .","." передайте, пожалуйста, за проезд, водителю." ."</br>";
		//передача водителю денег
		$obj->transmittodriver($driver);
	}
	//взять сдачу
	public function takesdacha(){
		echo $this->name ." взял сдачу, через 20 минут он доедет до работы.";
	}
}