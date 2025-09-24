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
        Schema::create('penguji', function (Blueprint $table) {
            $table->smallIncrements('id_penguji');
            $table->string('nama_penguji', 100);
            $table->char('telp', 13);
            $table->string('email')->unique();
            $table->string('asal_instansi', 100);
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penguji');
    }
};
