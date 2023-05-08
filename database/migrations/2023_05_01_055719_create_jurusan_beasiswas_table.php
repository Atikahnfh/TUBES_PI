<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jurusan_beasiswas', function (Blueprint $table) {
            $table->id('id_jrsn_beasiswa');
            $table->unsignedBigInteger('id_beasiswa');
            $table->unsignedBigInteger('id_beasiswa_khsjrsn');
            $table->integer('ipk_min');
            $table->foreign('id_beasiswa')->references('id_beasiswa')->on('beasiswas')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_beasiswa_khsjrsn')->references('id_jurusan')->on('jurusans')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusan_beasiswas');
    }
};
