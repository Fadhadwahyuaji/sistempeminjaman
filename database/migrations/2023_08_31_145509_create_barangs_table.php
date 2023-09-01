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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('gambar', 255);
            $table->string('nama_brg', 255);
            $table->enum('penanggungjawab', ['TI', 'TM', 'TPTU', 'KP', 'SUBBAG' ]);
            $table->enum('tipe', ['habispakai', 'nonhabispakai']);
            $table->enum('kondisi', ['bagus' ,'rusak']);
            $table->integer('tersedia');
            $table->integer('total');
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
        Schema::dropIfExists('barangs');
    }
};
