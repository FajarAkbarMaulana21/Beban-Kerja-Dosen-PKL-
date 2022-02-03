<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email');
            $table->string('jabatan');
            $table->string('tempat');
            $table->date('tgl_lhir');
            $table->char('nidn');
            $table->char('nip');
            $table->string('jenis');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->string('golongan');
            $table->foreignId('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('dosens');
    }
}
