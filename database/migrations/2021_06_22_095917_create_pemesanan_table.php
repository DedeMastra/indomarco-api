<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->increments('pemesanan_id');
            $table->integer('kode_barang');
            $table->integer('kode_supplier');
            $table->foreign('kode_barang')->references('id')->on('barangs');
            $table->foreign('kode_supplier')->references('id')->on('suppliers');
            $table->string('tanggal_pemesanan');
            $table->integer('jumlah_pemesanan');
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
        Schema::dropIfExists('pemesanans');
    }
}
