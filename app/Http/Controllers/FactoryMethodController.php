<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Http\Request;

use App\Patterns\FactoryMethod\CarTest;
use App\Patterns\FactoryMethod\BicycleTest;



class FactoryMethodController extends Controller
{
    public function action ()
    {
        $vehicle_test = new BicycleTest();
        $car_test = new CarTest();
        $vehicle_test->actions('Author');
        $vehicle_test->actions('Mitsubishi');
        $car_test->actions('Mitsubishi');
        $car_test->actions('BMW');
        $car_test->actions('Lada');

        return 'no errors';
    }
}
