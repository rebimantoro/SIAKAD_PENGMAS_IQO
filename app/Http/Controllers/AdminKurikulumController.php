<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;



class AdminKurikulumController extends Controller
{
    // ADMIN Kurikulum

    /**
     * Admin Kurikulum Create Kelas
     * 
     * @return Response
     */
    public function createKelas(Request $request)
    {

        $request->validate([
            'tingkat_kelas' => 'required',
            'kurikulum' => 'required',
            'program_studi' => 'required',
            'tahun_pelajaran' => 'required',
            'program_wali_kelas' => 'required',
            'musyrifah1' => 'required',
            'musyrifah2' => 'required',
            'nama_kelas' => 'required',
            'nama_lain' => '',
            'kapasitas' => 'required',
        ]);

        $kelas = new Kelas;
        $kelas->tingkat_kelas = $request->input('tingkat_kelas');
        $kelas->kurikulum = $request->input('kurikulum');
        $kelas->program_studi = $request->input('program_studi');
        $kelas->tahun_pelajaran = $request->input('tahun_pelajaran');
        $kelas->program_wali_kelas = $request->input('program_wali_kelas');
        $kelas->musyrifah1 = $request->input('musyrifah1');
        $kelas->musyrifah2 = $request->input('musyrifah2');
        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->nama_lain = $request->input('nama_lain');
        $kelas->kapasitas = $request->input('kapasitas');
        $kelas->save();

        return redirect()->back()->with('success', 'Kelas berhasil ditambahkan');
    }

    /**
     * Admin Kurikulum Create Mata Pelajaran
     * 
     * @return Response
     */
    public function createMataPelajaran(Request $request)
    {

        $request->validate([
            'nama_mapel' => 'required',
            'kelompok_mapel' => 'required',
            'desc_mapel' => 'required',
            'status_mapel' => 'required',
        ]);

        $mapel = new MataPelajaran;
        $mapel->nama_mapel = $request->input('nama_mapel');
        $mapel->kelompok_mapel = $request->input('kelompok_mapel');
        $mapel->desc_mapel = $request->input('desc_mapel');
        $mapel->status_mapel = $request->input('status_mapel');
        $mapel->save();
    }
}
