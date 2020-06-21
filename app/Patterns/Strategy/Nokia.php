<?php

namespace App\Patterns\Strategy;

use App\Patterns\Strategy\CallingSettings\OldModule;
use App\Patterns\Strategy\CameraSettings\BadCamera;

class Nokia extends BasePhone
{
    public function __construct()
    {
        $this->callingSettings = new OldModule();
        $this->cameraSettings = new BadCamera();
    }

    public function shockproof()
    {
        return 'some res';
    }

}
