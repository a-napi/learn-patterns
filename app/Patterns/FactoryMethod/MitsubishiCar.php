<?php

namespace App\Patterns\FactoryMethod;

class MitsubishiCar extends Vehicle
{
    protected $color = 'green';
    protected $max_speed = 240;
    protected $wheels = 4;

    public function drive()
    {
        return 'driving by mitsubishi car';
    }

}
