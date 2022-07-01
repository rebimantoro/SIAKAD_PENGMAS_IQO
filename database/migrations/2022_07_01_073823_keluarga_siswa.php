<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KeluargaSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('keluarga_siswa', function (Blueprint $table) {
            $table->unsignedInteger('id_siswa');
            // Keluarga
            // Ayah
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('tempat_lahir_ayah');
            $table->string('tanggal_lahir_ayah');
            $table->string('agama_ayah');
            $table->string('kebutuhan_khusus_ayah');
            $table->string('telp_ayah');
            $table->string('email_ayah');
            $table->string('wn_ayah');
            $table->string('status_hidup_ayah');
            $table->string('pendidikan_ayah');
            $table->string('lembaga_pendidikan_ayah');
            $table->string('profesi_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nrp_ayah');
            // Ibu
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('tempat_lahir_ibu');
            $table->string('tanggal_lahir_ibu');
            $table->string('agama_ibu');
            $table->string('kebutuhan_khusus_ibu');
            $table->string('telp_ibu');
            $table->string('email_ibu');
            $table->string('wn_ibu');
            $table->string('status_hidup_ibu');
            $table->string('pendidikan_ibu');
            $table->string('lembaga_pendidikan_ibu');
            $table->string('profesi_ibu');
            $table->string('penghasilan_ibu');
            $table->string('nrp_ibu');
            // wali
            $table->string('nama_wali');
            $table->string('nik_wali');
            $table->string('tempat_lahir_wali');
            $table->string('tanggal_lahir_wali');
            $table->string('agama_wali');
            $table->string('kebutuhan_khusus_wali');
            $table->string('telp_wali');
            $table->string('email_wali');
            $table->string('wn_wali');
            $table->string('status_hidup_wali');
            $table->string('pendidikan_wali');
            $table->string('lembaga_pendidikan_wali');
            $table->string('profesi_wali');
            $table->string('penghasilan_wali');
            $table->string('nrp_wali');
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
        Schema::dropIfExists('keluarga_siswa');
    }
}
