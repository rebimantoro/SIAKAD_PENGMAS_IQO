<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'sd',
        'smp',
        'sma',
        'd1',
        'd2',
        'd3',
        's1',
        's2',
        's3',
    ];
}
