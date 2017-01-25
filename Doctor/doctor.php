<?php
namespace Doctor;
interface docint{
	public function takepatient($obj);
	public function prescription($arr);
}
class Doctor implements docint{
	public $drugs;
	private $patient;
	public $namedoc;
	public function __construct($namedoc){
		$this->namedoc=$namedoc;
	}
	//принять пациента
	public function takepatient($obj){
		$this->patient=$obj;
		echo "Имя пациента: " .$this->patient->name."</br>";
		echo $this->namedoc." назначил препараты: "."</br>";
	}
	//выписать рецепт
	public function prescription($arr){
		$this->patient->takepill($arr);	
		
	}
}