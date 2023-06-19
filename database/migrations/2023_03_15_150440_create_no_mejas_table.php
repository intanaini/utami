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
        Schema::create('no_mejas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemesananmenu');
            $table->string('nomor_meja');
            $table->foreign('id_pemesananmenu')->references('id')->on('pemesanan_menus')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('no_mejas');
    }
};
