<?php

require_once 'Vehicle.php';

class truck extends Vehicle
{

    private int $loadingCapacity;

    private int $loading = 0;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function isFull(): string
    {
        $sentence = '';

        $sentence .= 'Full';
        return $sentence;
        
        while ($this->loading < $this->loadingCapacity) {
            $this->loading++;
            $sentence .= 'Filling';
        }
    }


    public function setstorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getloadingCapacity(string $loadingCapacity): string
    {
        return $this->$loadingCapacity;
    }

    public function setloadingCapacity(int $loadingCapacity): void
    {

        $this->storageCapacity = $loadingCapacity;
    }
}
