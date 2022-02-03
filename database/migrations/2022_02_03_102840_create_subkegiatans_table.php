<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubkegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subkegiatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_penunjang')->references('id')->on('penunjangs');
            $table->string('subkegiatan');
            $table->double('angka_kredit')->default(0);
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
        Schema::dropIfExists('subkegiatans');
    }
}
