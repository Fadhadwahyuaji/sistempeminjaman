<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('foto_profil', 255);
            $table->integer('nim_mhs');
            $table->string('nama_mhs', 255);
            $table->enum('jurusan', ['TI', 'TM', 'TPTU', 'KP' ]);
            $table->string('email', 50);
            $table->string('katasandi', 255);
            $table->string('telp', 13);
            $table->string('alamat', 255);
            $table->string('role', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
