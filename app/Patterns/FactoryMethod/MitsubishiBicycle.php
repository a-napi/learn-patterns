<?php

namespace App\Patterns\FactoryMethod;

class MitsubishiBicycle extends Vehicle
{
    protected $color = 'green';
    protected $max_speed = 40;
    protected $wheels = 2;

    public function drive()
    {
        return 'driving by mitsubishi bicycle';
    }

}
