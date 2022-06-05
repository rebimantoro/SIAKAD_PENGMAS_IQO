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
            $table->unsignedInteger('id_kelas');
            $table->unsignedInteger('id_mapel');
            $table->unsignedInteger('id_guru');
            $table->string('hari');
            // $table->string('kelas');
            $table->string('periode');
            $table->string('jam');
            // $table->string('mapel');
            // $table->string('guru');
            $table->timestamps();

            $table->foreign('id_kelas')
                ->references('id')
                ->on('kelas')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_mapel')
                ->references('id')
                ->on('mata_pelajaran')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_guru')
                ->references('id')
                ->on('data_pegawai')
                ->onDelete('cascade')->onUpdate('cascade');

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
