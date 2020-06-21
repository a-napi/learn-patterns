<?php

namespace App\Patterns\Decorator;

use App\Patterns\Decorator\Interfaces\IDecorator;


class BaseStringDisplayer implements IDecorator
{
    protected $string;

    public function __construct($string = null)
    {
        if($string) {
            $this->setString($string);
        }
    }

    public function setString($string)
    {
        $this->string = $string;
    }

    public function displayString()
    {
        return $this->string;
    }

}
