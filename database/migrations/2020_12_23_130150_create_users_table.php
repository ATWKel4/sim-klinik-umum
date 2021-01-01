<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    // Users { id, nama, tanggal_lahir, alamat, jenis_kelamin }
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->text('password');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
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
        Schema::dropIfExists('users');
    }
}
