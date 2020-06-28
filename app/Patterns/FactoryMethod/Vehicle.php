<?php

namespace App\Patterns\FactoryMethod;

abstract class Vehicle
{
    protected $color;
    protected $max_speed;
    protected $wheels;

    abstract public function drive();

    public function getColor(){
        return 'It has ' . $this->color . ' color';
    }

    public function getNumberOfWheels()
    {
        return 'It has ' . $this->wheels . ' wheels';
    }

    public function driveWithMaxSpeed()
    {
        return 'max speed is ' . $this->max_speed . ' km per hour';
    }

}
