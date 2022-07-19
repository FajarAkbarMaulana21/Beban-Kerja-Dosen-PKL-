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
            $table->foreignId('id_subkegiatan')->references('id')->on('subkegiatans');
            $table->string('nama_kegiatan');
            $table->string('filenames');
            $table->double('sks_beban_kerja');
            $table->string('semester');
            $table->string('tahun_akademik');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
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
