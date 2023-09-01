<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'foto_profil',
        'nim_mhs',
        'nama_mhs',
        'jurusan',
        'email',
        'katasandi',
        'telp',
        'alamat',
        'role'
    ];

    protected $hidden = [
        'katasandi',
    ];
}
