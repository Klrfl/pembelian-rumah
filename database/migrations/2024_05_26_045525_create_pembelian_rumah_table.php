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
        Schema::dropIfExists('pembelian_rumah');

        Schema::create('pembelian_rumah', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->integer('kode_unit');
            $table->string('nama_pembeli');
            $table->bigInteger('id_type')->unsigned();
            $table->foreign('id_type')->references('id_type')->on('type_rumah');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->decimal('harga_rumah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_rumah');
    }
};
