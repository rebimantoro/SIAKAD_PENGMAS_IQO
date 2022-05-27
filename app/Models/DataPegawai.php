<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPegawai extends Model
{   
    protected $table = 'data_pegawai';
    use HasFactory;

    protected $fillable = 
    [
        'nik_sekolah',
        'nik_dt',
        'nuptk',
        'no_ktp',
        'nama',
        'tempat',
        'tgl_lahir',
        'jenis_kelamin',
        'gol_darah',
        'alamat',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'kelurahan',
        'agama',
        'status_pernikahan',
        'warga_negara',
        'no_hp1',
        'no_hp2',
        'tgl_masuk',
        'status_aktif',
        'kontrak_kerja',
        'bagian',
        'jabatan_utama',
        'jabatan_kedua',
        'level_user',
        'status_pegawai',
        'email',
        'foto',
        'ktp',
        'kk',
        'ijazah',
        'skck',
        'surat_keterangan_dokter',
        'surat_rekomendasi_kerja',
        'sertifikat_keahlian',
        'kartu_kuning',
        'npwp'

    ];

    public function nama_plotting() {
        return $this->hasMany('App\Models\Plotting', 'guru', 'nama');
    }

}
