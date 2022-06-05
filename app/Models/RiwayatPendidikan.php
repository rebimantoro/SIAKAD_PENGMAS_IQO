<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{   
    protected $table = 'riwayat_pendidikan';
    use HasFactory;
    
    protected $fillable = [
        // SD
        'nama_sd',
        'kota_sd',
        'tahunlulus_sd',
        'fakultas_sd',
        'jurusan_sd',
        // SMP
        'nama_smp',
        'kota_smp',
        'tahunlulus_smp',
        'fakultas_smp',
        'jurusan_smp',
        // SMA
        'nama_smasmk',
        'kota_smasmk',
        'tahunlulus_smasmk',
        'fakultas_smasmk',
        'jurusan_smasmk',
        // d1
        'nama_d1',
        'kota_d1',
        'tahunlulus_d1',
        'fakultas_d1',
        'jurusan_d1',
        // d2
        'nama_d2',
        'kota_d2',
        'tahunlulus_d2',
        'fakultas_d2',
        'jurusan_d2',
        // d3
        'nama_d3',
        'kota_d3',
        'tahunlulus_d3',
        'fakultas_d3',
        'jurusan_d3',
        // s1
        'nama_s1',
        'kota_s1',
        'tahunlulus_s1',
        'fakultas_s1',
        'jurusan_s1',
        // s2
        'nama_s2',
        'kota_s2',
        'tahunlulus_s2',
        'fakultas_s2',
        'jurusan_s2',
        // s3
        'nama_s3',
        'kota_s3',
        'tahunlulus_s3',
        'fakultas_s3',
        'jurusan_s3',

    ];

}
