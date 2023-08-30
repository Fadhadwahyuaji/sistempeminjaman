<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        return view('admin.dashboard');
    }
    function profile(){
        return view('admin.pages.profile');
    }
    function setting(){
        return view('admin.pages.setting');
    }
    function pricing(){
        return view('admin.pages.pricing');
    }
    function billing(){
        return view('admin.pages.billing');
    }
    function error(){
        return view('admin.pages.404error');
    }
    function layouts(){
        return view('admin.layouts');
    }
    function tables(){
        return view('admin.tables');
    }
}
