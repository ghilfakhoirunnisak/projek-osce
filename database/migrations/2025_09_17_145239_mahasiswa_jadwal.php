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
        Schema::create('mahasiswa_jadwal', function (Blueprint $table) {
            $table->smallIncrements('id_mahasiswa_jadwal');
            $table->unsignedSmallInteger('id_jadwal');
            $table->char('nim', 12);
            $table->unsignedTinyInteger('id_station');
            $table->unsignedSmallInteger('id_penguji');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal')->onDelete('cascade');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('id_station')->references('id_station')->on('station')->onDelete('cascade');
            $table->foreign('id_penguji')->references('id_penguji')->on('penguji')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_jadwal');
    }
};
