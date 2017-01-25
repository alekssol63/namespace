<?php
namespace Driver;
interface driverint{
	public function givesign($driver,$passenger,$passtranceiver);//попросить передать за проезд
	public function takemoneyfortransit();
	public function givesdacha();
	
}
class Driver implements driverint{
	private $pass;
	private $passtrans;
	public function __construct($name){
		$this->name=$name;
	}
	//Попросить передать за проезд
	public function givesign($driver,$passenger,$passtranceiver){
		$this->pass=$passenger;
		$this->passtrans=$passtranceiver;
		echo $this->pass->name .",". " оплатите за проезд!"."</br>";
		//пассажир просит передает деньги, другого пассажира
		$this->pass->givemoney($passtranceiver,$driver);
	}
	public function givesdacha(){
		echo $this->passtrans->name ." " . "взял сдачу." ."</br>";
		$this->passtrans->transmittopassenger($this->pass);
		
	}
	
	public function takemoneyfortransit(){
		echo $this->name . " взял деньги. И отсчитал сдачу." ."</br>";
		echo $this->passtrans->name ."," . " возьмите сдачу." ."</br>";
		
		$this->givesdacha();	
		
	}
	
}
