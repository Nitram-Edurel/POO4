<?php

require_once 'bike.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once 'car.php';
$car = new Car('blue', 1);
echo $car->forward();
var_dump($car);

$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);

?>