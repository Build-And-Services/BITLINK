<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('akundinasnonnganjuk', function (Blueprint $table) {
            $table->id('id_akunm')->unsigned()->autoIncrement();
            $table->string('nama_instansi', 255)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('alamat_lengkap', 255)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('email', 50)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('telepon', 15)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('username', 15)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->string('password', 15)->charset('utf8mb4')->collation('utf8mb4_general_ci');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('akundinasnonnganjuk');
    }
};
