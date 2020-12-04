<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculator;
use Illuminate\View\View;

class CalculatorController extends Controller
{

    public function index(Request $request) {
        $result = 0;
        $firstnumber = $request->input('firstnumber');
        $secondnumber = $request->input('secondnumber');

        $result = $firstnumber + $secondnumber;

        return redirect('/calculator')->with('message', 'Your result is '.$result);
    }

}
