<?php

namespace App\Patterns\Observer;

use App\Patterns\Observer\Interfaces\IObserver;

class FirstObserver implements IObserver
{
    public function addLog($string)
    {
        $arr = explode(' ', $string);
        $modified_string = implode('_', $arr);
        \Log::debug('STRING FROM FIRST OBSERVER: ' . $modified_string);
    }
}
