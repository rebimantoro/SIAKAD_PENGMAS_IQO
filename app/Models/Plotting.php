<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plotting extends Model
{
    use HasFactory;
    protected $table = 'plotting';

    protected $fillable =
    [
        'hari',
        'kelas',
        'periode',
        'jam',
        'mapel',
        'guru'
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas', 'kelas', 'nama_kelas');
    }

    public function mapel()
    {
        return $this->belongsTo('App\Models\MataPelajaran', 'mapel', 'nama_mapel');
    }

    public function guru()
    {
        return $this->belongsTo('App\Models\DataPegawai', 'guru', 'nama_pegawai');
    }
}
