<?php

include 'Truck.php';
include 'Car.php';

class Controller {

    public function createTruck() {
        $truck  = new Truck(‘mercedes’, ‘ВК0212АА’);
        $truck->setСapacity(5000);
    }

    public function createCars() {
        $cars  = [];

        $cars[] = (new Car(‘bmw’, ‘АА0213ВС’))->setWeight(2300);
        $cars[] = (new Car(‘audi’, ‘АІ0212ВС’))->setWeight(1900);
        $cars[] = (new Car(‘renault’, ‘АС2333ВС’))->setWeight(2100);
    }

    public function addCarToTruck($truck, $car ){
        if ($truck->addCar($car) == true ){
            echo "Car with the license plate ". $car->license ." was loaded onto the truck";
        }else{
            $overWeight = $truck->getOverWeight($car);
            echo "Car with the license plate ". $car->license ." cannot be loaded  onto the truck,  overweight ". $overWeight ."kg";
        }
    }




}