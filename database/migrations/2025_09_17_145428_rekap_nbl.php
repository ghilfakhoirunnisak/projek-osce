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
        Schema::create('rekap_nbl', function (Blueprint $table) {
            $table->smallIncrements('id_rekap_nbl');
            $table->unsignedSmallInteger('id_jadwal');
            $table->unsignedTinyInteger('id_station');
            $table->decimal('nilai_nbl');
            $table->decimal('nilai_sem');
            $table->timestamps();

            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal')->onDelete('cascade');
            $table->foreign('id_station')->references('id_station')->on('station')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_nbl');
    }
};
