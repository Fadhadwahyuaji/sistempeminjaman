<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TestInputController extends Controller
{
    function index() {
        Item::create([
                'name' => 'Arduino UNO',
                'type' => 'Habis Pakai',
                'condition' => 'Bagus',
                'quantity' => 100
        ]);
        echo 'success';
    }
    function test_input(Request $request) {
        Item::create([
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'condition' => $request->input('condition'),
                'quantity' => $request->input('quantity')
        ]);
        echo 'success';
    }
    function form() {
        return view('testform');
    }

    function get_data() {
        //$data = Item::all();
        $data = Item::where('condition', 'baru')->where('quantity', '>', 99)->orderBY('name')->get(); // pengkondisian
        //dd($data);
        return view('testform', compact('data'));
    }
}
