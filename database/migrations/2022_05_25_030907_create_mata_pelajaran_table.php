<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mapel');
            $table->string('kelompok_mapel');
            $table->string('desc_mapel');
            // nama_guru is nama_pegawai form data_pegawai table
            $table->string('nama_guru');
            $table->string('kelas');
            $table->string('status_mapel');
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
        Schema::dropIfExists('mata_pelajaran');
    }
}
