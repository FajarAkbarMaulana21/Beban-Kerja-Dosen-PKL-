<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nip');
            $table->string('gelar_depan');
            $table->string('nama');
            $table->string('gelar_belakang');
            $table->string('email');
            $table->string('perguruan_tinggi');
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
        Schema::dropIfExists('assesors');
    }
}
