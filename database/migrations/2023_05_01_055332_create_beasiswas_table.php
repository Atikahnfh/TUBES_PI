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
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id('id_beasiswa');
            $table->string('nama_beasiswa');
            $table->unsignedBigInteger('id_mitra');
            $table->string('deskripsi');
            $table->integer('angkatan_awal');
            $table->integer('angkatan_akhir');
            $table->integer('sem_min');
            $table->integer('sem_max');
            $table->unsignedBigInteger('status');
            $table->foreign('id_mitra')->references('id_mitra')->on('mitras')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('status')->references('id_status')->on('status_beasiswas')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};
