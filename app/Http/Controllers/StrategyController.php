<?php

namespace App\Http\Controllers;

use App\Patterns\Strategy\CallingSettings\OldModule;
use App\Patterns\Strategy\SamsungS9;
use App\Patterns\Strategy\Nokia;

class StrategyController extends Controller
{
    public function action ()
    {
        $nokia = new Nokia();
        $samsung = new SamsungS9();

        \Log::debug($nokia->takePhoto());
        \Log::debug($nokia->takeVideo());
        \Log::debug($nokia->makeCalls());

        \Log::debug($samsung->takePhoto());
        \Log::debug($samsung->takeVideo());
        \Log::debug($samsung->makeCalls());

        $samsung->setCallingSettings(new OldModule());

        \Log::debug($samsung->makeCalls());

        return 'no errors, result in logs';
    }
}
