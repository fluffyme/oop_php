<?php

include 'Auto.php';

class Truck extends Auto
{
// Properties
    public $accelerationTime;
    public $engineVolume;
    public $capacity;
    public $number_of_chassis;


    public function __construct()
    {
        parent::__construct();
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }


    public function addCar($car)
    {
        if ($this->capacity - $this->getCarsTotalWeight()  >= $car->weight) {
            return true;
        } else {
            return false;
        }

    }

    public function getCarsTotalWeight() {

        $truck_id = $this->id;

        return $this->conn->query("SELECT SUM(weight) FROM car WHERE truck_id= $truck_id")->fetch();
    }

    public function getOverWeight($car)
    {

        $emptySpace = $this->capacity - $this->getCarsTotalWeight();
        $overWeight = $car->weight - $emptySpace;

        return $overWeight;
    }
}

?>