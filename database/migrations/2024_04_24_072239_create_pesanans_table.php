<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_benih');
            $table->unsignedBigInteger('id_user');
            $table->integer('quantity');
            $table->integer('harga');
            $table->string('alamat_lengkap');
            $table->string('telepon');
            $table->date('tgl_pengiriman');
            $table->date('tgl_diterima');
            $table->enum('status_pembayaran', ['SUKSES', 'BELUM DIBAYAR', 'DIBATALKAN'])->default('BELUM DIBAYAR');
            $table->enum('status_pengiriman', ['SEDANG DIKIRIM', 'DITERIMA']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
