<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanBekerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_bekerja', function (Blueprint $table) {
            $table->string('nama_pegawai');
            $table->string('periode');
            $table->string('tempat');
            $table->string('posisi');
            $table->timestamps();

            $table->foreign('nama_pegawai')
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
        Schema::dropIfExists('pengalaman_bekerja');
    }
}
