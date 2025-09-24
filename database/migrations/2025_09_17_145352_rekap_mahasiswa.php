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
        Schema::create('rekap_mahasiswa', function (Blueprint $table) {
            $table->smallIncrements('id_rekap_mahasiswa');
            $table->unsignedSmallInteger('id_jadwal');
            $table->char('nim', 12);
            $table->decimal('total_rata_rata');
            $table->timestamps();

            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal')->onDelete('cascade');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_mahasiswa');
    }
};
