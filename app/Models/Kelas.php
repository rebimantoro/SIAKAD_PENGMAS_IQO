<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable =
    [
        'tingkat_kelas',
        'kurikulum',
        'program_studi',
        'tahun_pelajaran',
        'program_wali_kelas',
        'musyrifah1',
        'musyrifah2',
        'nama_kelas',
        'nama_lain',
        'kapasitas',
    ];

    public function kelas_plotting() {
        
        return $this->hasMany('App\Models\Plotting', 'kelas', 'nama_kelas');
    }
    
}
