<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Plotting;
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
     * Show Kelas
     * 
     * @return Response
     */
    public function kelas() {
        $pegawai = DataPegawai::all();
        // dd($pegawai);
        return view('kelas.tambah-kelas', compact('pegawai'));
    }

    /**
     * Show Kelas
     * 
     * @return Response
     */
    public function showKelas() {
        $kelas1 = Kelas::get();
        // dd($kelas);
        return view('kelas.data-kelas', compact('kelas1'));
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

        return redirect()->back()->with('success', 'Mata Pelajaran berhasil ditambahkan');
    }

    /**
     * Admin Kurikulum Create Plotting Pelajaran
     * 
     * @return Response
     */
    public function createPlottingPelajaran(Request $request) {

        $request->validate([
            'hari' => 'required',
            'kelas' => 'required |unique:nama_kelas',
            'periode' => 'required',
            'jam' => 'required',
            'mapel' => 'required |unique:mata_pelajaran',
            'guru' => 'required|unique:data_pegawai',
        ]);

        $plotting = new Plotting;
        
        $id_kelas = Kelas::find('id')->id;
        $id_mapel = MataPelajaran::find('id')->id;
        $id_guru = DataPegawai::find('id')->id;

        $plotting->id_kelas = $id_kelas;
        $plotting->id_mapel = $id_mapel;
        $plotting->id_guru = $id_guru;
        $plotting->hari = $request->input('hari');
        $plotting->kelas = $request->input('kelas');
        $plotting->periode = $request->input('periode');
        $plotting->jam = $request->input('jam');
        $plotting->mapel = $request->input('mapel');
        $plotting->guru = $request->input('guru');
        $plotting->save();
        return redirect()->back()->with('success', 'Plotting berhasil ditambahkan');
    }

    /**
     * Show Plotting
     * 
     * @return Response
     */
    public function plotting(Request $request) {
        $kelas = Kelas::all();
        $mapel = MataPelajaran::all();
        $guru = DataPegawai::all();

        return view('mapel.plotting-mapel', compact('kelas', 'mapel', 'guru'));
    }
}
