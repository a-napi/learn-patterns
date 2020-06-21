<?php

namespace App\Patterns\Strategy;

use App\Patterns\Strategy\Interfaces\IStrategyPhone;
use App\Patterns\Strategy\Interfaces\IStrategyCalling;
use App\Patterns\Strategy\Interfaces\IStrategyCamera;

use App\Patterns\Strategy\CameraSettings\BadCamera;
use App\Patterns\Strategy\CallingSettings\OldModule;
use Illuminate\Auth\Events\OtherDeviceLogout;

abstract class BasePhone implements IStrategyPhone
{
    protected $callingSettings;
    protected $cameraSettings;

    public function __construct()
    {
        $this->callingSettings = new OldModule();
        $this->cameraSettings = new BadCamera();
    }

    public function setCallingSettings(IStrategyCalling $callingSettings)
    {
        $this->callingSettings = $callingSettings;
    }

    /**
     * @param mixed $cameraSettings
     */
    public function setCameraSettings(IStrategyCamera $cameraSettings)
    {
        $this->cameraSettings = $cameraSettings;
    }

    public function makeCalls()
    {
        return $this->callingSettings->makeCalls();
    }

    public function takeVideo()
    {
        return $this->cameraSettings->takeVideo();
    }

    public function takePhoto()
    {
        return $this->cameraSettings->takePhoto();
    }

}
