<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            $table->string('nama_pegawai');
            $table->string('nama_sd');
            $table->string('kota_sd');
            $table->string('tahunlulus_sd');
            $table->string('fakultas_sd');
            $table->string('jurusan_sd');
            $table->string('nama_smp');
            $table->string('kota_smp');
            $table->string('tahunlulus_smp');
            $table->string('fakultas_smp');
            $table->string('jurusan_smp');
            $table->string('nama_smasmk');
            $table->string('kota_smasmk');
            $table->string('tahunlulus_smasmk');
            $table->string('fakultas_smasmk');
            $table->string('jurusan_smasmk');
            $table->string('nama_d1');
            $table->string('kota_d1');
            $table->string('tahunlulus_d1');
            $table->string('fakultas_d1');
            $table->string('jurusan_d1');
            $table->string('nama_d2');
            $table->string('kota_d2');
            $table->string('tahunlulus_d2');
            $table->string('fakultas_d2');
            $table->string('jurusan_d2');
            $table->string('nama_d3');
            $table->string('kota_d3');
            $table->string('tahunlulus_d3');
            $table->string('fakultas_d3');
            $table->string('jurusan_d3');
            $table->string('nama_s1');
            $table->string('kota_s1');
            $table->string('tahunlulus_s1');
            $table->string('fakultas_s1');
            $table->string('jurusan_s1');
            $table->string('nama_s2');
            $table->string('kota_s2');
            $table->string('tahunlulus_s2');
            $table->string('fakultas_s2');
            $table->string('jurusan_s2');
            $table->string('nama_s3');
            $table->string('kota_s3');
            $table->string('tahunlulus_s3');
            $table->string('fakultas_s3');
            $table->string('jurusan_s3');
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
        Schema::dropIfExists('riwayat_pendidikan');
    }
}
