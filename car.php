<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats, $energy);
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function switchOn() {
        return true;
    }
    public function switchOff() {
        return false;
    }
}