<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(Request $request, $param1){
        $query1 = $request-> input('query1');
        return view('test_controller', compact('param1', 'query1'));
    }
}
