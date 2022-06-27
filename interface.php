<?php 

require_once "Data/Car.php";


$car = new Avanza();
$car->Drive();
echo $car->getBrand();
echo $car->getMaintains();