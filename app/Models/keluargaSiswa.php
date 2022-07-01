<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluargaSiswa extends Model
{   
    protected $table = 'keluarga_siswa';
    use HasFactory;
    protected $fillable = [
        // orang tua
        // Ayah
        'nama_ayah',
        'nik_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'agama_ayah',
        'kebutuhan_khusus_ayah',
        'telp_ayah',
        'email_ayah',
        'wn_ayah',
        'status_hidup_ayah',
        'pendidikan_ayah',
        'lembaga_pendidikan_ayah',
        'profesi_ayah',
        'penghasilan_ayah',
        'nrp_ayah',
        // ibu
        'nama_ibu',
        'nik_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'agama_ibu',
        'kebutuhan_khusus_ibu',
        'telp_ibu',
        'email_ibu',
        'wn_ibu',
        'status_hidup_ibu',
        'pendidikan_ibu',
        'lembaga_pendidikan_ibu',
        'profesi_ibu',
        'penghasilan_ibu',
        'nrp_ibu',
        // wali
        'nama_wali',
        'nik_wali',
        'tempat_lahir_wali',
        'tanggal_lahir_wali',
        'agama_wali',
        'kebutuhan_khusus_wali',
        'telp_wali',
        'email_wali',
        'wn_wali',
        'status_hidup_wali',
        'pendidikan_wali',
        'lembaga_pendidikan_wali',
        'profesi_wali',
        'penghasilan_wali',
        'nrp_wali',
    ];
}
