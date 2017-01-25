<?php
namespace Patient;
interface pacint{
	public function takepill($arr);
	
}
class Patient{	
	public $name='Пациент';
	public function __construct($name){
		$this->name=$name;
	}
	public function takepill($arr){
		foreach ($arr as $key =>$value)
		{
			$value->tastethedrug();
		
		}
	}
}