<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanKebuntingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_kebuntingans', function (Blueprint $table) {
            $table->id();
            $table->integer('no_kartu')->nullable();
            $table->date('tanggal_pkb')->nullable();
            $table->string('lokasi')->nullable();
            $table->integer('desa_code')->nullable();
            $table->integer('bps_code')->nullable();
            $table->string('peternak')->nullable();
            $table->integer('idpeternak')->nullable();
            $table->string('identifikasi_hewan')->nullable();
            $table->string('hewan')->nullable();
            $table->integer('bulan_kebuntingan')->nullable();
            $table->integer('telp_petugas')->nullable();
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
        Schema::dropIfExists('laporan_kebuntingans');
    }
}
