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
        Schema::create('rincian_psns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_pesanan');
            $table->integer('qty');
            $table->integer('total');
            $table->foreign('id_menu')->references('id')->on('menus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pesanan')->references('id')->on('pemesanan_menus')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rincian_psns');
    }
};
