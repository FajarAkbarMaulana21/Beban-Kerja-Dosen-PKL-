<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKinerjaPenunjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinerja_penunjangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_dosen')->references('id')->on('dosens');
            $table->string('jenis_kegiatan');
            $table->foreignId('id_subkegiatan')->references('id')->on('subkegiatans');
            $table->string('bukti_penugasan');
            $table->integer('sks_beban_kerja');
            $table->string('masa_penugasan');
            $table->string('bukti_dokumen');
            $table->integer('sks_kinerja');
            $table->string('rekomendasi');
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
        Schema::dropIfExists('kinerja_penunjangs');
    }
}
