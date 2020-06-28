<?php

namespace App\Patterns\FactoryMethod;

class Author extends Vehicle
{
    protected $color = 'yellow';
    protected $max_speed = 35;
    protected $wheels = 2;

    public function drive()
    {
        return 'driving by simple bicycle';
    }

}
