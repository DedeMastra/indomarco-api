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
            $table->increments('id');
            $table->integer('barang_id');
            $table->integer('supplier_id');
            $table->foreign('barang_id')->references('id')->on('barangs');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
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
