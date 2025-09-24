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
        Schema::create('nilai', function (Blueprint $table) {
            $table->smallIncrements('id_nilai');
            $table->unsignedSmallInteger('id_mahasiswa_jadwal');
            $table->decimal('actual_mark');
            $table->decimal('global_rating');
            $table->timestamps();

            $table->foreign('id_mahasiswa_jadwal')->references('id_mahasiswa_jadwal')->on('mahasiswa_jadwal')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
