<?php

require_once 'HighWay.php';

$pedestrianWay = new PedestrianWay ('1 voie', 10);

var_dump($pedestrianWay);

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;  

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard);
    }
}