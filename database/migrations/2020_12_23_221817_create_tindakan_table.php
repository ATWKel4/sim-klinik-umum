<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakanTable extends Migration
{
    // Tindakan { id, diagnosis, deskripsi }
    public function up()
    {
        Schema::create('tindakan', function (Blueprint $table) {
            $table->id();
            $table->text('diagnosis');
            $table->text('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindakan');
    }
}
