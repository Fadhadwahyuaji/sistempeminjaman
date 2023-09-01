<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'nama' => 'Eka Ismantohadi',
            'penanggungjawab' => 'KA LAB Teknik Informatika',
            'email' => 'adminti@example.com',
            'katasandi' => Hash::make('adminti123'), // Ganti dengan kata sandi yang Anda inginkan,
            'telp' => '0881026785678',
            'role' => 'admin',
        ]);

    }
}
