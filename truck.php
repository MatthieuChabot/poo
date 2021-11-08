<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

     private $capacity;

     private $loading = 0;

     public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
     {
        parent::__construct($color, $nbSeats, $energy);
        $this->capacity = $capacity;
     }


    public function getCapacity(): string
    {
        return $this->capacity;
    }


    public function getLoading(): string
    {
        return $this->loading;

    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
}