<?php

namespace App\Patterns\Strategy;

use App\Patterns\Strategy\CallingSettings\NewestModule;
use App\Patterns\Strategy\CameraSettings\GoodCamera;

class SamsungS9 extends BasePhone
{
    public function __construct()
    {
        $this->callingSettings = new NewestModule();
        $this->cameraSettings = new GoodCamera();
    }

    public function internet()
    {
        return 'some res';
    }

}
