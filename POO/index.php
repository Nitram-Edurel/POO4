<?php

require_once 'bike.php';
require_once 'car.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'truck.php';
require_once 'Vehicle.php';
require_once 'Skateboard.php';


//bike

$bike = new Bicycle('red', 1);
echo $bike->forward();

$bike = new Bicycle('red', 1);
$bike->setCurrentSpeed(0);

echo $bike->forward();
echo '<br> Vitesse du vélo :' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo :' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();

$betwin = new Bicycle('grey', 1);

$levelokiroule = new Bicycle('red', 2);

//car.php

$vaillante = new Car('blue', 4, 'fuel');

echo $vaillante->start($hasParKBrake = true) . '<br>';
echo 'Vitesse de la vaillante :' . $vaillante->getCurrentSpeed() . 'km/h' . '<br>';
echo $vaillante->forward() . '<br>';
echo $vaillante->getCurrentSpeed() . 'km/h' . '<br>';
echo $vaillante->brake() . '<br>';
echo 'Vitesse de la vaillante :' . $vaillante->getCurrentSpeed() . 'km/h' . '<br>';

$mercedesAmgPetronasF1 = new Car('black', 1, 'hybride');

echo $mercedesAmgPetronasF1->getColor();

$car = new Car('white', 8, 'fuel');
echo $car->forward();

var_dump(Car::ALLOWED_ENERGIES);

//truck.php

$grosCamion = new Truck('red',8,'fuel', 8);

echo $grosCamion->isFull() . '<br>';
echo $grosCamion->forward() . '<br>';
echo 'Vitesse actuelle: ' . $grosCamion->setCurrentSpeed(8) . 'km/h' . '<br>';
echo $grosCamion->brake() . '<br>';
echo 'Vitesse actuelle: ' . $grosCamion->setCurrentSpeed(8) . 'km/h' . '<br>';

$theBigRedTruck = new Truck('green', 2, 'nuclear', 8);
var_dump($theBigRedTruck);

$theBigRedTruck->setstorageCapacity(0);


echo $theBigRedTruck->isFull() . '<br>';
echo $theBigRedTruck->forward() . '<br>';
echo 'Vitesse actuelle: ' . $theBigRedTruck->setCurrentSpeed(8) . 'km/h' . '<br>';
echo $theBigRedTruck->brake() . '<br>';
echo 'Vitesse actuelle: ' . $theBigRedTruck->setCurrentSpeed(8) . 'km/h' . '<br>';

//Skateboard

$skateboard = new Skateboard('orange', 1);
var_dump($skateboard);

echo $skateboard->forward() . '<br>';