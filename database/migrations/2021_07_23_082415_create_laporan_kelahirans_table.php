<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanKelahiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_kelahirans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_laporan')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('lokasi')->nullable();
            $table->integer('desa_code')->nullable();
            $table->integer('bps_code')->nullable();
            $table->string('nama_peternak')->nullable();
            $table->integer('id_peternak')->nullable();
            $table->string('identitas_hewan_induk')->nullable();
            $table->integer('kartuternak_hewan_induk')->nullable();
            $table->string('spesies')->nullable();
            $table->string('identitas_hewan_anak')->nullable();
            $table->integer('kartuternak_hewan_anak')->nullable();
            $table->enum('jenis_kelamin_anak',['jantan','betina'])->nullable();
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
        Schema::dropIfExists('laporan_kelahirans');
    }
}
