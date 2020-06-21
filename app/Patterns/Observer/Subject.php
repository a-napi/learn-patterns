<?php

namespace App\Patterns\Observer;

use App\Patterns\Observer\Interfaces\ISubject;
use App\Patterns\Observer\Interfaces\IObserver;
use Illuminate\Support\Collection;

class Subject implements ISubject
{
    protected $observers;
    protected $some_string = 'default';

    public function __construct()
    {
        $this->observers = [];
        \Log::debug('hello.Observer');
    }

    public function setString($string)
    {
        $this->some_string = $string;
    }

    public function addObserver(IObserver $observer)
    {
        $this->observers[get_class($observer)] = $observer;
        \Log::debug('$this->observers');
        \Log::debug(json_encode($this->observers));
    }

    public function removeObserver(IObserver $observer)
    {
        unset($this->observers[get_class($observer)]);
        \Log::debug('$this->observers');
        \Log::debug(json_encode($this->observers));
    }

    public function notify()
    {
        foreach($this->observers as $observer) {
            $observer->addLog($this->some_string);
        }
    }
}
