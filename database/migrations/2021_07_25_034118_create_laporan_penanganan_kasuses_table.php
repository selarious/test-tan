<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPenangananKasusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_penanganan_kasuses', function (Blueprint $table) {
            $table->id();
            $table->integer('kartu_ternak');
            $table->integer('idkasus')->nullable();
            $table->date('tanggal_kasus')->nullable();
            $table->integer('tanda')->nullable();
            $table->string('diff_diag')->nullable();
            $table->string('nama_obat')->nullable();
            $table->string('jenis_obat')->nullable();
            $table->string('dosis')->nullable();
            $table->string('unit')->nullable();
            $table->string('pelapor_kasus')->nullable();
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
        Schema::dropIfExists('laporan_penanganan_kasuses');
    }
}
