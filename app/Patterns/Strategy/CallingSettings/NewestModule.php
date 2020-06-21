<?php

namespace App\Patterns\Strategy\CallingSettings;

use App\Patterns\Strategy\Interfaces\IStrategyCalling;


class NewestModule implements IStrategyCalling
{

    public function makeCalls()
    {
        return 'make super modern Calls';
    }

}
