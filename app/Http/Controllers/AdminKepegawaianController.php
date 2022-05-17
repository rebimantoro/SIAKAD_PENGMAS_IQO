<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\DataPegawai;
use App\Models\KartuKeluarga;
use App\Models\RiwayatPendidikan;
use App\Models\PengalamanBekerja;
use Illuminate\Http\Request;


class AdminKepegawaianController extends Controller
{
    // ================================= CREATE FUNCTION =================================

    /**
     * Create Data Pegawai
     *
     * @return Response
     */
    public function createDataPegawai(Request $request) {
        
        //validate the data
        $request->validate([
            'nik_sekolah' => 'required',
            'nik_dt' => 'required',
            'nuptk' => 'required',
            'no_ktp' => 'required',
            'nama' => 'required',
            'tempat' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'gol_darah' => 'required',
            'alamat' => 'required',
            'provisni' => 'required',
            'kabupaten_kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'agama' => 'required',
            'status_pernikahan' => 'required',
            'warga_negara' => 'required',
            'no_hp1' => 'required',
            'no_hp2' => 'required',
            'tgl_masuk' => 'required',
            'status_aktif' => 'required',
            'kontrak_kerja' => 'required',
            'bagian' => 'required',
            'jabatan_utama' => 'required',
            'jabatan_kedua' => 'required',
            'level_user' => 'required',
            'status_pegawai' => 'required',
            'email' => 'required',
            'foto' => 'required',
        ]);
        // store the data based on model
        // check if validation is error
        if ($request->hasErrors()) {
            return redirect()->back()->withErrors($request->validationError())->withInput();
        } else {
            $dataPegawai = new DataPegawai;
            $dataPegawai->nik_sekolah = $request->input('nik_sekolah');
            $dataPegawai->nik_dt = $request->input('nik_dt');
            $dataPegawai->nuptk = $request->input('nuptk');
            $dataPegawai->no_ktp = $request->input('no_ktp');
            $dataPegawai->nama = $request->input('nama');
            $dataPegawai->tempat = $request->input('tempat');
            $dataPegawai->tgl_lahir = $request->input('tgl_lahir');
            $dataPegawai->jenis_kelamin = $request->input('jenis_kelamin');
            $dataPegawai->gol_darah = $request->input('gol_darah');
            $dataPegawai->alamat = $request->input('alamat');
            $dataPegawai->provisni = $request->input('provisni');
            $dataPegawai->kabupaten_kota = $request->input('kabupaten_kota');
            $dataPegawai->kecamatan = $request->input('kecamatan');
            $dataPegawai->kelurahan = $request->input('kelurahan');
            $dataPegawai->agama = $request->input('agama');
            $dataPegawai->status_pernikahan = $request->input('status_pernikahan');
            $dataPegawai->warga_negara = $request->input('warga_negara');
            $dataPegawai->no_hp1 = $request->input('no_hp1');
            $dataPegawai->no_hp2 = $request->input('no_hp2');
            $dataPegawai->tgl_masuk = $request->input('tgl_masuk');
            $dataPegawai->status_aktif = $request->input('status_aktif');
            $dataPegawai->kontrak_kerja = $request->input('kontrak_kerja');
            $dataPegawai->bagian = $request->input('bagian');
            $dataPegawai->jabatan_utama = $request->input('jabatan_utama');
            $dataPegawai->jabatan_kedua = $request->input('jabatan_kedua');
            $dataPegawai->level_user = $request->input('level_user');
            $dataPegawai->status_pegawai = $request->input('status_pegawai');
            $dataPegawai->email = $request->input('email');
            $dataPegawai->foto = $request->input('foto');
            $dataPegawai->save();
        }
        return redirect()->back()->with('success', 'Data Pegawai berhasil ditambahkan');        
    }

    /**
     * Create Kartu Keluarga
     *
     * @return Response
     */
    public function createKartuKeluarga(Request $request) {
        // validate the data
        $request->validate([
            'no_kk' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa_kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten_kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'jumlah_anggota_kk' => 'required',
        ]);
        // store the data based on model
        // check if validation is error
        if ($request->hasErrors()) {
            return redirect()->back()->withErrors($request->validationError())->withInput();
        } else {
            $kartuKeluarga = new KartuKeluarga;
            $kartuKeluarga->alamat = $request->input('alamat');
            $kartuKeluarga->rt = $request->input('rt');
            $kartuKeluarga->rw = $request->input('rw');
            $kartuKeluarga->desa_kelurahan = $request->input('desa_kelurahan');
            $kartuKeluarga->kecamatan = $request->input('kecamatan');
            $kartuKeluarga->kabupaten_kota = $request->input('kabupaten_kota');
            $kartuKeluarga->provinsi = $request->input('provinsi');
            $kartuKeluarga->kode_pos = $request->input('kode_pos');
            $kartuKeluarga->jumlah_anggota_kk = $request->input('jumlah_anggota_kk');
            $kartuKeluarga->save();
        }
        return redirect()->back()->with('success', 'Data Kartu Keluarga berhasil ditambahkan');
    }

    /**
     * Create Riwayat Pendidikan
     *
     * @return Response
     */
    public function createRiwayatPendidikan(Request $request) {
        // validate the data
        $request->validate([
            'sd' => 'required',
            'smp' => 'required',
            'sma' => 'required',
            'd1' => 'optional',
            'd2' => 'optional',
            'd3' => 'optional',
            's1' => 'optional',
            's2' => 'optional',
            's3' => 'optional',
        ]);
        // store the data based on model
        // check if validation is error
        if ($request->hasErrors()) {
            return redirect()->back()->withErrors($request->validationError())->withInput();
        } else {
            $riwayatPendidikan = new RiwayatPendidikan;
            $riwayatPendidikan->sd = $request->input('sd');
            $riwayatPendidikan->smp = $request->input('smp');
            $riwayatPendidikan->sma = $request->input('sma');
            $riwayatPendidikan->d1 = $request->input('d1');
            $riwayatPendidikan->d2 = $request->input('d2');
            $riwayatPendidikan->d3 = $request->input('d3');
            $riwayatPendidikan->s1 = $request->input('s1');
            $riwayatPendidikan->s2 = $request->input('s2');
            $riwayatPendidikan->s3 = $request->input('s3');
            $riwayatPendidikan->save();
        }
        return redirect()->back()->with('success', 'Data Riwayat Pendidikan berhasil ditambahkan');
    }

    /**
     * Create Pengalaman Bekerja
     * 
     * @return Response
     */
    public function createPengalamanBekerja(Request $request) {
        // validate data
        $request->validate([
            'periode' => 'optional',
            'tempat' => 'optional',
            'posisi' => 'optional',
        ]);
        // store data based on model
        // check if validation is error
        if ($request->hasErrors()) {
            return redirect()->back()->withErrors($request->validationError())->withInput();
        } else {
            $pengalamanBekerja = new PengalamanBekerja;
            $pengalamanBekerja->periode = $request->input('periode');
            $pengalamanBekerja->tempat = $request->input('tempat');
            $pengalamanBekerja->posisi = $request->input('posisi');
            $pengalamanBekerja->save();
        }
        return redirect()->back()->with('success', 'Data Pengalaman Bekerja berhasil ditambahkan');
    }

    // ================================ END OF CREATE FUNCTION ======================================

    // ================================ START OF UPDATE FUNCTION ======================================

    /**
     * Update Data Pegawai
     *
     * @return Response
     */
    public function updateDataPegawai(Request $request, $nuptk) {
        // find data based on id
        $dataPegawai = DataPegawai::find($nuptk);
        // Check if id is not found
        if ($dataPegawai == null) {
            return redirect()->back()->with('error', 'Data Pegawai tidak ditemukan');
        } else {
            // update data pegawai
            $dataPegawai->nik_sekolah = $request->input('nik_sekolah');
            $dataPegawai->nik_dt = $request->input('nik_dt');
            $dataPegawai->no_ktp = $request->input('no_ktp');
            $dataPegawai->nama = $request->input('nama');
            $dataPegawai->tempat = $request->input('tempat');
            $dataPegawai->tgl_lahir = $request->input('tgl_lahir');
            $dataPegawai->jenis_kelamin = $request->input('jenis_kelamin');
            $dataPegawai->gol_darah = $request->input('gol_darah');
            $dataPegawai->alamat = $request->input('alamat');
            $dataPegawai->provisni = $request->input('provisni');
            $dataPegawai->kabupaten_kota = $request->input('kabupaten_kota');
            $dataPegawai->kecamatan = $request->input('kecamatan');
            $dataPegawai->kelurahan = $request->input('kelurahan');
            $dataPegawai->agama = $request->input('agama');
            $dataPegawai->status_pernikahan = $request->input('status_pernikahan');
            $dataPegawai->warga_negara = $request->input('warga_negara');
            $dataPegawai->no_hp1 = $request->input('no_hp1');
            $dataPegawai->no_hp2 = $request->input('no_hp2');
            $dataPegawai->tgl_masuk = $request->input('tgl_masuk');
            $dataPegawai->status_aktif = $request->input('status_aktif');
            $dataPegawai->kontrak_kerja = $request->input('kontrak_kerja');
            $dataPegawai->bagian = $request->input('bagian');
            $dataPegawai->jabatan_utama = $request->input('jabatan_utama');
            $dataPegawai->jabatan_kedua = $request->input('jabatan_kedua');
            $dataPegawai->level_user = $request->input('level_user');
            $dataPegawai->status_pegawai = $request->input('status_pegawai');
            $dataPegawai->email = $request->input('email');
            $dataPegawai->foto = $request->input('foto');
            $dataPegawai->save();
        }
        return redirect()->back()->with('success', 'Data Pegawai berhasil diperbarui');
    }

    /**
     * Update Kartu Keluarga Pegawai
     * 
     * @return Response
     */
    public function updateKartuKeluarga(Request $request, $id) {
        // find data based on id
        $kartuKeluargaPegawai = KartuKeluarga::find($id);
        // Check if id is not found
        if ($kartuKeluargaPegawai == null) {
            return redirect()->back()->with('error', 'Data Kartu Keluarga Pegawai tidak ditemukan');
        } else {
            // update data kartu keluarga
            $kartuKeluargaPegawai->no_kk = $request->input('no_kk');
            $kartuKeluargaPegawai->alamat = $request->input('alamat');
            $kartuKeluargaPegawai->rt = $request->input('rt');
            $kartuKeluargaPegawai->rw = $request->input('rw');
            $kartuKeluargaPegawai->desa_kelurahan->id = $request->input('desa_kelurahan');
            $kartuKeluargaPegawai->kecamatan->id = $request->input('kecamatan');
            $kartuKeluargaPegawai->kabupaten_kota->id = $request->input('kabupaten_kota');
            $kartuKeluargaPegawai->provinsi->id = $request->input('provinsi');
            $kartuKeluargaPegawai->kode_pos = $request->input('kode_pos');
            $kartuKeluargaPegawai->jumlah_anggota_kk = $request->input('jumlah_anggota_kk');
            $kartuKeluargaPegawai->save();
        }
        return redirect()->back()->with('success', 'Data Kartu Keluarga Pegawai berhasil diperbarui');
    }

}
