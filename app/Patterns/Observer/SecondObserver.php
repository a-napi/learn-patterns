<?php

namespace App\Patterns\Observer;

use App\Patterns\Observer\Interfaces\IObserver;

class SecondObserver implements IObserver
{
    public function addLog($string)
    {
        $modified_string = mb_strtoupper($string);
        \Log::debug('STRING FROM SECOND OBSERVER: ' . $modified_string);
    }
}
