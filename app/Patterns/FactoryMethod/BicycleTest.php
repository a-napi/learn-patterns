<?php

namespace App\Patterns\FactoryMethod;

class BicycleTest extends VehicleTest
{
    public function createVehicle($string) {
        if($string === 'Author') {
            return new Author();
        }
        else if ($string === 'Mitsubishi') {
            return new MitsubishiBicycle();
        }
        return null;
    }

}
