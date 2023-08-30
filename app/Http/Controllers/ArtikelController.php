<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    function home(Request $request, $parameter){
        return view('ArtikelController', compact('parameter'));
    }
}
