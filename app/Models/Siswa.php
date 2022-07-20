<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    use HasFactory;

    protected $fillable = [
        'nik',
        'akte',
        'kk',
        'nisn_siswa',
        'akte_siswa',
        'kk_siswa',
        'ijazah_siswa',
        'skhun_siswa',
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'kewarganegaraan',
        'bahasa',
        // Hubungan Keluarga
        'status_keluarga',
        'status_anak',
        'tinggal_bersama',
        'anak_ke',
        'jumlah_saudara',
        // Status siswa
        'status_aktif',
        'status_pendaftaran',
        'tahun_akademik',
        'tanggal_belajar',
        // Kelengkapan Data
        'nisn',
        'akte',
        'kk',
        'ijazah',
        'skhun',
        'foto',
        // Alamat Siswa
        'provinsi',
        'kab_kota',
        'kecamatan',
        'desa_kel',
        'alamat',
        'rt',
        'rw',
        'kode_pos',
        'no_telp',
        'email',
        'jarak',
        'transportasi',
        'waktu_tempuh_jam',
        'waktu_tempuh_menit',
        // kesehatan
        'golongan_darah',
        'penyakit_kronis',
        'kelainan',
        'kebutuhan_khusus',
        'tb',
        'bb',
        // hobi
        'kesenian',
        'olahraga',
        'organisasi',
        'hobi_lain',
        // lainnya
        'kelayakan_pip',
        'alasan_pip',
        'kode_bank',
        'no_rekening',
        'nama_rekening',
        'kps',
        'no_kps',
        'kks',
        'no_kip',
        'nama_kip',
        'no_kks',
    ];

}
