<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlottingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plotting', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('kelas');
            $table->string('periode');
            $table->string('jam');
            $table->string('mapel');
            $table->string('guru');
            $table->timestamps();

            $table->foreign('kelas')
                ->references('nama_kelas')
                ->on('kelas');

            $table->foreign('mapel')
                ->references('nama_mapel')
                ->on('mata_pelajaran');

            $table->foreign('guru')
                ->references('nama_pegawai')
                ->on('data_pegawai');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plotting');
    }
}
