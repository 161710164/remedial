<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('nis');
            $table->unsignedInteger('dosen_id');
            $table->foreign('dosen_id')->references('id')->on('dosen')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedInteger('jurusan_id');
            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('mahasiswa');
    }
}
