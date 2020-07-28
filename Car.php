<?php

include 'Auto.php';

class Car extends Auto
{
    // Properties
    public $accelerationTime ;
    public $engineVolume;
    public $bodyType = ['hatchback', 'sedan', 'coupe', 'convertible'];
    public $fuelType = ['87 Octane Gasoline', '90+ Octane Gasoline', 'E85 Gasoline', 'Diesel'];
    public $weight;

    public function __construct() {
        parent::__construct();
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

}

