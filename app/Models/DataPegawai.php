<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPegawai extends Model
{
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
        'provisni',
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
        'foto'
    ];

    // alamat belongs to kartu keluarga
    public function kartu_keluarga(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(KartuKeluarga::class, 'alamat', 'alamat');
    }

}
