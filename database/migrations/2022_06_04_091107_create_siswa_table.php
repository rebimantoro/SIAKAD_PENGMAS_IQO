<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('akte');
            $table->string('kk');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('bahasa');
            // Hubungan Keluarga
            $table->string('status_keluarga');
            $table->string('status_anak');
            $table->string('tinggal_bersama');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            // Status siswa
            $table->string('status_aktif');
            $table->string('status_pendaftaran');
            $table->string('tahun_akademik');
            $table->string('tanggal_belajar');
            // Kelengkapan Data
            $table->string('nisn');
            $table->string('akte');
            $table->string('kk');
            $table->string('ijazah');
            $table->string('skhun');
            $table->string('foto');
            // Alamat Siswa
            $table->string('provinsi');
            $table->string('kab_kota');
            $table->string('kecamatan');
            $table->string('desa_kel');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kode_pos');
            $table->string('no_telp');
            $table->string('email');
            $table->string('jarak');
            $table->string('transportasi');
            $table->string('waktu_tempuh_jam');
            $table->string('waktu_tempuh_menit');
            // Kesehatan
            $table->string('golongan_darah');
            $table->string('penyakit_kronis');
            $table->string('kelainan');
            $table->string('kebutuhan_khusus');
            $table->string('tb');
            $table->string('bb');
            // Riwayat Pendidikan
            // TK
            $table->string('nama_tk');
            $table->string('tanggal_ijazah_tk');
            $table->string('ijazah_tk');
            $table->string('ujian_tk');
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
        Schema::dropIfExists('siswa');
    }
}
