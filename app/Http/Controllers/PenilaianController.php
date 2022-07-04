<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class PenilaianController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('penilaian.penilaian', [
            'kelas' => $kelas
        ]);
    }
}
