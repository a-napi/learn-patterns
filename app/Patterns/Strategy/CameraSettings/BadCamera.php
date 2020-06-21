<?php

namespace App\Patterns\Strategy\CameraSettings;

use App\Patterns\Strategy\Interfaces\IStrategyCamera;


class BadCamera implements IStrategyCamera
{

    public function takeVideo()
    {
        return null;
    }

    public function takePhoto()
    {
        return 'BAD PICTURES';
    }

}
