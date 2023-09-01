<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BarangController extends Controller
{
    function tambah_brg(Request $request) {
        // dd($request->all());
        // Mahasiswa::create($request->all());
        $this->validate($request,[
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:10000',
                'nama_brg' => 'required',
                'penanggungjawab' => 'required',
                'tipe' => 'required',
                'kondisi' => 'required|min:8',
                'tersedia' => 'required',
                'total' => 'required',
        ]);
        if ($request->file('gambar')== null) {
            $gambar = "";
        }else{
           $request->file('gambar')->move('foto_barang/', $request->file('gambar')->getClientOriginalName());
           $gambar = $request->file('gambar')->getClientOriginalName();
        }

        Barang::create([
                'gambar' => $gambar,
                'nama_brg' => $request->input('nama_brg'),
                'penanggungjawab' => $request->input('penanggungjawab'),
                'tipe' => $request->input('tipe'),
                'kondisi' => $request->input('kondisi'),
                'tersedia' => $request->input('tersedia'),
                'total' => $request->input('total'),
        ]);
        return redirect()->route('admin.barang.subbag')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    //menampilkan data barang
    function tampil_brg_subbag() {
        $data = Barang::all();
        // $data = Barang::where('penanggungjawab', 'KA LAB SUBBAG'); // pengkondisian
        //dd($data);
        return view('admin.barang.subbag', compact('data'));
    }
}
