<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    // menambah data
    function tambah_mhs(Request $request) {
        // dd($request->all());
        // Mahasiswa::create($request->all());
        $this->validate($request, [
                // 'foto_profil' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'nim_mhs' => 'required',
                'nama_mhs' => 'required',
                'jurusan' => 'required',
                'email' => 'required',
                'katasandi' => 'required|min:8',
                'telp' => 'required',
        ]);
        if ($request->file('foto_profil')== null) {
            $foto_profil = "";
        }else{
           $request->file('foto_profil')->move('foto_mhs/', $request->file('foto_profil')->getClientOriginalName());
           $foto_profil = $request->file('foto_profil')->getClientOriginalName();
        }
        $password = 'katasandi';
        $katasandihash = Hash::make($password);

        Mahasiswa::create([
                'foto_profil' => $foto_profil,
                'nim_mhs' => $request->input('nim_mhs'),
                'nama_mhs' => $request->input('nama_mhs'),
                'jurusan' => $request->input('jurusan'),
                'email' => $request->input('email'),
                'katasandi' => $katasandihash,
                'telp' => $request->input('telp'),
                'alamat' => $request->input('alamat'),
                'role' => 'mahasiswa',
        ]);
        // // Mahasiswa::create($request->all()); // untuk meminta semua data diisi

        // // return redirect()->back()->with('success', 'Data berhasil terdaftar.');
        return redirect()->route('mahasiswa')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    // menampilkan data
    function tampil_mhs() {
        $data = Mahasiswa::all();
        // $data = Item::where('condition', 'baru')->where('quantity', '>', 99)->orderBY('name')->get(); // pengkondisian
        //dd($data);
        return view('admin.pengguna.data_mahasiswa', compact('data'));
    }


    // function cari_mhs( string $nim_mhs) {
    //     $data = Mahasiswa::find($nim_mhs);
    //     // return view('admin.pengguna.data_mahasiswa', compact('data'));
    //     return view('admin.pengguna.data_mahasiswa', compact('data'));
    // }

    function data_mhs($id) {
        $data = Mahasiswa::find($id);
        return view('components.edit_mahasiswa', compact('data'));
    }
    
    function edit_mhs(Request $request ,$id) {
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with(['success' => 'Data Berhasil Diupdate!']);
    }


    function hapus_mhs($id) {
        $data = Mahasiswa::find($id);
        $data->delete();
        
        return redirect()->route('mahasiswa')->with(['success' => 'Data Berhasil Disimpan!']);

    }

}
