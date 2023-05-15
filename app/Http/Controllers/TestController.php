<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function add(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;

        return $num1 + $num2;
    }
}
