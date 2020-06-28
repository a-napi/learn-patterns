<?php

namespace App\Patterns\FactoryMethod;

abstract class VehicleTest
{
    abstract public function createVehicle($string);

    public function actions($vehicle_name)
    {
        $vehicle = $this->createVehicle($vehicle_name);
        if($vehicle === null) {
            \Log::debug( 'vehicle "' . $vehicle_name .'" does not exist');
            return;
        }
        \Log::debug($vehicle->getColor());
        \Log::debug($vehicle->getNumberOfWheels());
        \Log::debug($vehicle->drive());
        \Log::debug($vehicle->driveWithMaxSpeed());

    }

}
