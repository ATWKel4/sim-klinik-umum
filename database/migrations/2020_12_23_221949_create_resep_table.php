<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepTable extends Migration
{
    // Resep { id, obat_id, rekam_id, catatan }
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->id();
            $table->foreignId('obat_id')->constrained('obat');
            $table->text('catatan');
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
        Schema::dropIfExists('resep');
    }
}
