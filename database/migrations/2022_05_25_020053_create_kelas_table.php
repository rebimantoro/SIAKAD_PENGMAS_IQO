<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->string('tingkat_kelas');
            $table->string('kurikulum');
            $table->string('program_studi');
            $table->string('tahun_pelajaran');
            $table->string('program_wali_kelas');
            $table->string('musyrifah1');
            $table->string('musyrifah2');
            $table->string('nama_kelas')->primary();
            $table->string('nama_lain');
            $table->integer('kapasitas');
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
        Schema::dropIfExists('kelas');
    }
}
