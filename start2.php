<?php

function driver($class) {
    include __DIR__ .'\\'. $class . '.php';
	
};
function pass($class) {
	include __DIR__ .'\\'. $class . '.php';
}
function passtransmit($class) {
	include __DIR__ .'\\'. $class . '.php';
}

//что и как передается в переменную $class????
spl_autoload_register('driver');
spl_autoload_register('pass');
spl_autoload_register('passtransmit');




use \Driver\Driver as Driver;
use \Passenger\Passenger as Passenger;
use \Passtranceiver\Passtranceiver as Passtranceiver;




$driver=new Driver('Водитель Стас');
$pass= new Passenger('Пассажир');
$passtrans=new Passtranceiver('Передающий');
$driver->givesign($driver,$pass,$passtrans);