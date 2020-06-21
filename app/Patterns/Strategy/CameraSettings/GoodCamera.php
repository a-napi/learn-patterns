<?php

namespace App\Patterns\Strategy\CameraSettings;

use App\Patterns\Strategy\Interfaces\IStrategyCamera;


class GoodCamera implements IStrategyCamera
{

    public function takeVideo()
    {
        return 'AMAZING VIDEO';
    }

    public function takePhoto()
    {
        return 'AMAZING PICTURES';
    }

}
