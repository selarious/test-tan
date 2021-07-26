<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataIndividuHewansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_individu_hewans', function (Blueprint $table) {
            $table->id();
            $table->integer('no_kartu');
            $table->string('prop')->nullable();
            $table->string('kab')->nullable();
            $table->string('kec')->nullable();
            $table->string('des')->nullable();
            $table->string('nama_peternak')->nullable();
            $table->integer('idpeternak')->nullable();
            $table->integer('nik')->nullable();
            $table->string('spesies')->nullable();
            $table->enum('jeniskelamin', ['jantan','betina'])->nullable();
            $table->date('tanggallahir')->nullable();
            $table->string('idhewan')->nullable();
            $table->string('pendaftar')->nullable();
            $table->date('tgl_terdaftar')->nullable();
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
        Schema::dropIfExists('data_individu_hewans');
    }
}
