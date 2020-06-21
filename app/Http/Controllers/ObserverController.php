<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patterns\Observer\Subject;
use App\Patterns\Observer\FirstObserver;
use App\Patterns\Observer\SecondObserver;

class ObserverController extends Controller
{
    public function action ()
    {
        $subject = new Subject();
        $first_observer = new FirstObserver();
        $second_observer = new SecondObserver();

        $subject->setString('observer pattern here');
        $subject->addObserver($first_observer);
        $subject->addObserver($second_observer);

        $subject->notify();
        $subject->removeObserver($first_observer);

        $subject->notify();

        return 'no errors!';
    }
}
