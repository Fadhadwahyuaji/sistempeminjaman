<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelController extends Controller
{
    function index(Request $request){
        $search = $request-> input('search');
        $order = $request-> input('order');
        return view('table', compact('search', 'order'));
    }
}
