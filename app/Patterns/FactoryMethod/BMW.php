<?php

namespace App\Patterns\FactoryMethod;

class BMW extends Vehicle
{
    protected $color = 'black';
    protected $max_speed = 250;
    protected $wheels = 4;

    public function drive()
    {
        return 'some specific driving in BMW';
    }

}
