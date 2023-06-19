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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_pemesananmenu');
            $table->string('harga_menu');
            $table->string('nama_menu');
            $table->string('type_menu');
            $table->string('gambar');
            $table->string('status');
            // $table->foreign('id_pemesananmenu')->references('menus')->on('pemesanan_menus')->onDelete('cascade');

            // $table->foreign('menu')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('id_pemesananmenu')->references('id')->on('pemesanan_menus')->onDelete('cascade')->onUpdate('cascade');
            // $table->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
