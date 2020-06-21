<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patterns\Decorator\BaseStringDisplayer;
use App\Patterns\Decorator\AvoidSpacesDecorator;
use App\Patterns\Decorator\UpperCaseDecorator;


class DecoratorController extends Controller
{
    public function action ()
    {
        $string_obj = new BaseStringDisplayer('test sTring aDDED to ClaSS');
        $string_obj = new AvoidSpacesDecorator($string_obj);
        $string_obj = new UpperCaseDecorator($string_obj);
        return $string_obj->displayString();
    }
}
