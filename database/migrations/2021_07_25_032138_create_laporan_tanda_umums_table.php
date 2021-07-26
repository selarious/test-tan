<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTandaUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_tanda_umums', function (Blueprint $table) {
            $table->id();
            $table->integer('no_kartu')->nullable();
            $table->integer('idkasus')->nullable();
            $table->date('tanggal_kasus')->nullable();
            $table->string('tanda')->nullable();
            $table->string('diff_diag')->nullable();
            $table->string('pelapor_kasus')->nullable();
            $table->integer('telp_pelapor')->nullable();
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
        Schema::dropIfExists('laporan_tanda_umums');
    }
}
