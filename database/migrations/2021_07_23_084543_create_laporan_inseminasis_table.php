<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanInseminasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_inseminasis', function (Blueprint $table) {
            $table->id();
            $table->integer('no_kartu')->nullable();
            $table->date('tanggal_ib')->nullable();
            $table->string('lokasi')->nullable();
            $table->integer('desa_code')->nullable();
            $table->integer('bps_code')->nullable();
            $table->string('peternak')->nullable();
            $table->integer('idpeternak')->nullable();
            $table->string('identifikasi_hewan')->nullable();
            $table->string('bangsa_akseptor')->nullable();
            $table->string('idpejantan_straw')->nullable();
            $table->string('idpembuatan_straw')->nullable();
            $table->string('bangsa_pejantan')->nullable();
            $table->string('produsen')->nullable();
            $table->string('inseminator')->nullable();
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
        Schema::dropIfExists('laporan_inseminasis');
    }
}
