<?php

namespace App\Patterns\FactoryMethod;

class CarTest extends VehicleTest
{
    public function createVehicle($string) {
        if($string === 'BMW') {
            return new BMW();
        }
        else if ($string === 'Mitsubishi') {
            return new MitsubishiCar();
        }
        return null;
    }

}
