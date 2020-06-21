<?php

namespace App\Patterns\Strategy\CallingSettings;

use App\Patterns\Strategy\Interfaces\IStrategyCalling;


class OldModule implements IStrategyCalling
{

    public function makeCalls()
    {
        return 'make simple Calls';
    }

}
