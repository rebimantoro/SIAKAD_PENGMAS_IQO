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
            $table->increments('id_siswa');
            $table->string('nik');
            $table->string('akte_siswa');
            $table->string('kk_siswa');
            $table->string('nama_lengkap_siswa');
            $table->string('nama_panggilan_siswa');
            $table->string('jenis_kelamin_siswa');
            $table->string('tempat_lahir_siswa');
            $table->date('tanggal_lahir_siswa');
            $table->string('agama_siswa');
            $table->string('kewarganegaraan_siswa');
            $table->string('bahasa_siswa');
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
            
            // Hobi Siswa
            $table->string('kesenian');
            $table->string('olahraga');
            $table->string('organisasi');
            $table->string('hobi_lain');
            // Lainnya
            $table->string('kelayakan_pip');
            $table->string('alasan_pip');
            $table->string('kode_bank');
            $table->string('no_rekening');
            $table->string('nama_rekening');
            $table->string('kps');
            $table->string('no_kps');
            $table->string('kks');
            $table->string('no_kip');
            $table->string('nama_kip');
            $table->string('no_kks');
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
