<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAkunProdusenTable extends Migration
{
    public function up()
    {
        Schema::create('data_akun_produsen', function (Blueprint $table) {
            $table->id('id_akunp')->unsigned()->autoIncrement();
            $table->string('nama_pemilik', 100);
            $table->string('nama_perusahaan', 100);
            $table->string('nomor_legalitas_usaha', 50);
            $table->string('alamat_lengkap', 255);
            $table->string('email', 50);
            $table->string('telepon', 15);
            $table->string('username', 15);
            $table->string('password', 15);
            $table->unsignedBigInteger('id_kemitraan');
            $table->foreign('id_kemitraan')->references('id_kemitraan')->on('kemitraan_data')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produsenakun');
    }
}
