<?php

namespace App\Patterns\Strategy\Interfaces;

interface IStrategyCamera
{
    public function takePhoto();
    public function takeVideo();
}
