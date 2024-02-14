<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPegawaiTable extends Migration
{

    public function up()
    {
        Schema::create('data_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('nomor_telepon');
            $table->enum('jk', ['laki', 'perempuan']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('data_pegawai');
    }
};
