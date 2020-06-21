<?php

namespace App\Patterns\Decorator;

use App\Patterns\Decorator\Interfaces\IDecorator;


class AvoidSpacesDecorator implements IDecorator
{
    protected $decorated_object;

    public function __construct(IDecorator $decorated_object)
    {
        $this->decorated_object = $decorated_object;
    }

    public function displayString()
    {
        $string = $this->decorated_object->displayString();

        // remove all spaces
        $string = str_replace(' ', '', $string);
        return $string;
    }

}
