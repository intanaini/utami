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
        Schema::create('lapkeluars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_stokbahan');
            $table->string('nama_bahan');
            $table->dateTime('waktu_pembelian');
            $table->string('total_bahan');
            $table->string('sub_total');
            $table->foreign('id_stokbahan')->references('id')->on('stokbahans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapkeluars');
    }
};
