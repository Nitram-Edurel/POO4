<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    private string $energy;


    private int $energyLevel;


    private bool $hasParkBrake = false;


    public function __construct(string $color, int $nbSeats, string $energy)

    {

        parent::__construct($color, $nbSeats);

        $this->energy = $energy;
    }


    public function getEnergy(): string

    {

        return $this->energy;
    }


    public function setEnergy(string $energy): Car

    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel(): int

    {

        return $this->energyLevel;
    }


    public function setEnergyLevel(int $energyLevel): void

    {

        $this->energyLevel = $energyLevel;
    }

    public function HasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->setParkBrake = $hasParkBrake;
    }

    public function start(bool $hasParkBrake): void
    {
        if ($this->$hasParkBrake=false) {
            throw new Exception('Le frein à main n\'est pas enclenché');
        }
    }
}
