<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamTable extends Migration
{
    // Rekam { id, users_id, penyakit_id, tindakan_id, resep_id, jadwal_id }
    public function up()
    {
        Schema::create('rekam', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('penyakit_id')->constrained('penyakit');
            $table->foreignId('tindakan_id')->constrained('tindakan');
            $table->foreignId('resep_id')->constrained('resep');
            $table->foreignId('jadwal_id')->constrained('jadwal');
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
        Schema::dropIfExists('rekam');
    }
}
