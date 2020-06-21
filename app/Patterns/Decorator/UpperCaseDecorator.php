<?php

namespace App\Patterns\Decorator;

use App\Patterns\Decorator\Interfaces\IDecorator;


class UpperCaseDecorator implements IDecorator
{
    protected $decorated_object;

    public function __construct(IDecorator $decorated_object)
    {
        $this->decorated_object = $decorated_object;
    }

    public function displayString()
    {
        return mb_strtoupper($this->decorated_object->displayString());
    }

}
