<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_pegawai');
            $table->integer('kode_cabang');
            $table->string('nama_pegawai');
            $table->string('divisi_pegawai');
            $table->string('jabatan_pegawai');
            $table->integer('no_pegawai');
            $table->string('alamat_pegawai');
            $table->integer('gaji_pegawai');
            $table->integer('shift_pegawai');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('pegawais');
    }
}
