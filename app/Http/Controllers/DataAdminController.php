<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class DataAdminController extends Controller
{
    function index() {
        $data = Admin::all();
        return view('admin.pengguna.data_admin', compact('data'));
    }
}
