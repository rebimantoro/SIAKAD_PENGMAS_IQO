<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $table = 'mata_pelajaran';

    protected $fillable =
    [
        'nama_mapel',
        'kelompok_mapel',
        'desc_mapel',
        'status_mapel'
    ];

    public function mapel_plotting()
    {
        return $this->hasMany('App\Models\Plotting', 'mapel', 'nama_mapel');
    }
}
