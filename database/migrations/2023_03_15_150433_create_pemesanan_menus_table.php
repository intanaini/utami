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
        Schema::create('pemesanan_menus', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_lapmasuk');
            $table->string('nama_pelanggan');
            $table->string('no_telepon');
            $table->dateTime('waktu');
            $table->string('total_pesanan');
            $table->string('status_pesanan');
            $table->string('total_pembayaran');
            $table->string('catatan');
            $table->string('type_pesanan');
            // $table->foreign('id_lapmasuk')->references('id')->on('lapmasuks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_menus');
    }
};
