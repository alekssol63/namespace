<?php 
namespace Medicament;
interface Medint{
	public function tastethedrug();
	
}
class Medicament{
	public $name;
	public function __construct($name){
		$this->name=$name;
	}
	public function tastethedrug(){
		echo "Я выпито ".$this->name."</br>";
	}
}	
	