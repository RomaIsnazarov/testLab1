<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sum(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $sum = $a + $b;
        return view('sum', ['sum' => $sum]);
    }

    public function diff(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        return view('diff', ['diff' => $a - $b]);
    }
}
