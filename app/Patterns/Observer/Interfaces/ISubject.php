<?php

namespace App\Patterns\Observer\Interfaces;

use App\Patterns\Observer\Interfaces\IObserver;

interface ISubject
{
    public function addObserver(IObserver $observer);
    public function removeObserver(IObserver $observer);
    public function notify();
}
