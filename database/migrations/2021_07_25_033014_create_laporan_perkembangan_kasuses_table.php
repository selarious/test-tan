<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPerkembanganKasusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_perkembangan_kasuses', function (Blueprint $table) {
            $table->id();
            $table->integer('no_kartu')->nullable();
            $table->integer('idkasus')->nullable();
            $table->datetime('waktu_pk')->nullable();
            $table->string('pk')->nullable();
            $table->string('pelapor')->nullable();
            $table->string('telp_pelapor')->nullable();
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
        Schema::dropIfExists('laporan_perkembangan_kasuses');
    }
}
