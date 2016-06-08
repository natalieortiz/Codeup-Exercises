<?php

class Automobile {

    public $make;
    public $model;
    public $miles;
    public $speed = 0;
    public $uniqueIdentifier;
    public $owner;
    public $maxSpeed = 70;
    public static $numberOfWheels = 4;
    public static $numberOfEngines = 1;
    

    public function setupAutomobile($make, $model, $owner)
    {
        $this->make = $make;
        $this->model = $model;
        $this->owner = $owner;
    }

    public function speedUp($increment)
    {
        return $this->speed = $this->speed + $increment;
    }

    public function applyBrakes($decrement)
    {
        return $this->speed = $this->speed - $decrement;
    }

    public function honk()
    {
        return "HONK HONK" . PHP_EOL;
    }

    public function screetchingHalt()
    {
        $currentSpeed = $this->speed;
        $this->applyBrakes($currentSpeed);
        return $this->honk();
    }
}

