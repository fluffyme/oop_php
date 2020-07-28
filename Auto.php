<?php

class Auto
{
    // Properties
    public $name;
    public $seats;
    public $fuelVolume;
    public $year;
    public $color;
    public $license;

    public function __construct($name, $license) {
        $this->name = $name;
        $this->license = $license;
    }

}

?>