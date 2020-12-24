<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    // Obat { id, nama, kegunaan, dosis, kategori, harga, stock, aturan_pakai, tanggal_kadaluarsa }
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('kegunaan');
            $table->text('dosis');
            $table->string('kategori');
            $table->integer('harga');
            $table->integer('stock');
            $table->text('aturan_pakai');
            $table->date('tanggal_kadaluarsa');
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
        Schema::dropIfExists('obat');
    }
}
