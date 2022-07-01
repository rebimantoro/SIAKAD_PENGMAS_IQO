<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PendidikanSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pendidikan_siswa', function (Blueprint $table) {
            $table->unsignedInteger('id_siswa');
            // Riwayat Pendidikan
            // TK
            $table->string('nama_tk');
            $table->string('tanggal_ijazah_tk');
            $table->string('ijazah_tk');
            $table->string('ujian_tk');
            $table->string('tk_negri');
            $table->string('tk_swasta');
            // SD
            $table->string('nama_sd');
            $table->string('tanggal_ijazah_sd');
            $table->string('ijazah_sd');
            $table->string('ujian_sd');
            $table->string('sd_negri');
            $table->string('sd_swasta');
            // SMP
            $table->string('nama_smp');
            $table->string('tanggal_ijazah_smp');
            $table->string('ijazah_smp');
            $table->string('ujian_smp');
            $table->string('smp_negri');
            $table->string('smp_swasta');
            // Pindahan
            $table->string('pindahan_type');
            $table->string('alasan_pindah');
            $table->string('no_surat_pindah');
            $table->string('sekolah_asal');
            $table->string('alamat_sekolah_asal');
            $table->timestamps();

            $table->foreign('id_siswa')
                ->references('id_siswa')
                ->on('siswa')
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
        //
        Schema::dropIfExists('pendidikan_siswa');
    }
}
