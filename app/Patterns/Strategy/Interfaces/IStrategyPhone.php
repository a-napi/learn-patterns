<?php

namespace App\Patterns\Strategy\Interfaces;

interface IStrategyPhone
{
    public function makeCalls();
    public function takePhoto();
    public function takeVideo();
    public function setCameraSettings(IStrategyCamera $cameraSettings);
    public function setCallingSettings(IStrategyCalling $strategyCalling);
}
