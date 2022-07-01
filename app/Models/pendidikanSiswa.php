<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikanSiswa extends Model
{
    protected $table = 'pendidikan_siswa';
    use HasFactory;

    protected $fillable = [
        // riwayat pendidikan
        // TK
        'nama_tk',
        'tanggal_ijazah_tk',
        'ijazah_tk',
        'ujian_tk',
        'tk_negri',
        'tk_swasta',
        // SD
        'nama_sd',
        'tanggal_ijazah_sd',
        'ijazah_sd',
        'ujian_sd',
        'sd_negri',
        'sd_swasta',
        // SMP
        'nama_smp',
        'tanggal_ijazah_smp',
        'ijazah_smp',
        'ujian_smp',
        'smp_negri',
        'smp_swasta',
        // pindahan
        'pindahan_type',
        'alasan_pindah',
        'no_surat_pindah',
        'sekolah_asal',
        'alamat_sekolah_asal',
    ];
}
