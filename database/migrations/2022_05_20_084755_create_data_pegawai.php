<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nik_sekolah');
            $table->integer('nik_dt');
            $table->integer('nuptk');
            $table->integer('no_ktp');
            $table->string('nama_pegawai');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('gol_darah');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('desa_kelurahan');
            $table->string('agama');
            $table->string('status_pernikahan');
            $table->string('warga_negara');
            $table->integer('no_hp1');
            $table->integer('no_hp2')->nullable();
            $table->date('tgl_masuk');
            $table->string('status_aktif');
            $table->string('kontrak_kerja');
            $table->string('bagian');
            $table->string('jabatan_utama');
            $table->string('jabatan_kedua');
            $table->string('level_user');
            $table->string('status_pegawai');
            $table->string('email');
            $table->string('foto')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('skck')->nullable();
            $table->string('surat_keterangan_dokter')->nullable();
            $table->string('surat_rekomendasi_kerja')->nullable();
            $table->string('sertifikat_keahlian')->nullable();
            $table->string('kartu_kuning')->nullable();
            $table->string('npwp')->nullable();
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
        Schema::dropIfExists('data_pegawai');
    }
}
