<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        return view('admin.dashboard');
    }
    function profile(){
        return view('admin.profile');
    }
    function setting(){
        return view('admin.setting');
    }

    // data pengguna
    function mahasiswa(){
        return view('admin.pengguna.data_mahasiswa');
    }
    function admin(){
        return view('admin.pengguna.data_admin');
    }

    // data barang
    function subbag(){
        return view('admin.barang.subbag');
    }
    function TI(){
        return view('admin.barang.teknik_informatika');
    }
    function TM(){
        return view('admin.barang.teknik_mesin');
    }
    function TPTU(){
        return view('admin.barang.tptu');
    }
    function KP(){
        return view('admin.barang.keperawatan');
    }


    // function pricing(){
    //     return view('admin.pages.pricing');
    // }
    // function billing(){
    //     return view('admin.pages.billing');
    // }
    // function error(){
    //     return view('admin.pages.404error');
    // }

    // peminjaman
    function peminjaman(){
        return view('admin.peminjaman');
    }
    
   // pengembalian
   function pengembalian(){
    return view('admin.pengembalian');
}

   // riwayat
   function riwayat_peminjaman(){
    return view('admin.riwayat_peminjaman');
}


    function tables(){
        return view('admin.tables');
    }
}
