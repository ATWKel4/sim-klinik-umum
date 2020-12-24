<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    // Invoice { id, resep_id, harga_total, catatan, status, tanggal_pembayaran }
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resep_id')->constrained('resep');
            $table->integer('harga_total');
            $table->text('catatan');
            $table->string('status');
            $table->date('tanggal_pembayaran');
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
        Schema::dropIfExists('invoice');
    }
}
