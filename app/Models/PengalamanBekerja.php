<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanBekerja extends Model
{   

    protected $table = 'pengalaman_bekerja';
    use HasFactory;

    protected $fillable =
    [   
        'periode',
        'tempat',
        'posisi',
    ];

}
