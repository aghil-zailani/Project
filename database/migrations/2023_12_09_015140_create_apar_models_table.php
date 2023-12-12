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
        Schema::create('apar_models', function (Blueprint $table) {
            $table->id();
            $table->string('namaBarang');
            $table->string('stokBarang');
            $table->string('type');
            $table->string('deskripsi');
            $table->string('berat');
            $table->string('harga');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apar_models');
    }
};