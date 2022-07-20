<?php

namespace App\Http\Controllers;


use App\Models\DataPegawai;
use App\Models\KartuKeluarga;
use App\Models\RiwayatPendidikan;
use App\Models\PengalamanBekerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class AdminKepegawaianController extends Controller
{
    // ================================= CREATE FUNCTION =================================

    /**
     * Create Data Pegawai
     *
     * @return Response
     */
    public function createDataPegawai(Request $request)
    {
        //validate the data
        $request->validate([
            'nik-sekolah' => 'required',
            'nik-dt' => 'required',
            'nuptk' => 'required',
            'ktp' => 'required',
            'nama-pegawai' => 'required',
            'tempat-lahir' => 'required',
            'tanggal-lahir' => 'required',
            'jenis-kelamin' => 'required',
            'gol-darah' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa-kelurahan' => 'required',
            'agama' => 'required',
            'status-pernikahan' => 'required',
            'warga-negara' => 'required',
            'no_hp1' => 'required',
            'no_hp2' => '',
            'masuk' => 'required',
            'status_aktif' => 'required',
            'kontrak' => '',
            'bagian' => '',
            'jabatan-utama' => 'required',
            'jabatan-kedua' => 'required',
            'level' => 'required',
            'status_aktif' => 'required',
            'email' => 'required',
            'foto' => 'required', 'mimes:jpg,jpeg,png',
            'check-ktp' => '',
            'check-kk' => '',
            'check-ijazah' => '',
            'check-skck' => '',
            'check-skd' => '',
            'check-srk' => '',
            'check-sr' => '',
            'check-kuning' => '',
            'check-npwp' => '',


            'nik' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa-kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'jumlah-anggota-keluarga' => 'required',

            'nama-sd' => 'required',
            'kota-sd' => 'required',
            'tahunlulus-sd' => 'required',
            'fakultas-sd' => '',
            'jurusan-sd' => '',
            'nama-smp' => 'required',
            'kota-smp' => 'required',
            'tahunlulus-smp' => 'required',
            'fakultas-smp' => '',
            'jurusan-smp' => '',
            'nama-smasmk' => 'required',
            'kota-smasmk' => 'required',
            'tahunlulus-smasmk' => 'required',
            'fakultas-smasmk' => '',
            'jurusan-smasmk' => 'required',
            'nama-d1' => '',
            'kota-d1' => '',
            'tahunlulus-d1' => '',
            'fakultas-d1' => '',
            'jurusan-d1' => '',
            'nama-d2' => '',
            'kota-d2' => '',
            'tahunlulus-d2' => '',
            'fakultas-d2' => '',
            'jurusan-d2' => '',
            'nama-d3' => '',
            'kota-d3' => '',
            'tahunlulus-d3' => '',
            'fakultas-d3' => '',
            'jurusan-d3' => '',
            'nama-s1' => '',
            'kota-s1' => '',
            'tahunlulus-s1' => '',
            'fakultas-s1' => '',
            'jurusan-s1' => '',
            'nama-s2' => '',
            'kota-s2' => '',
            'tahunlulus-s2' => '',
            'fakultas-s2' => '',
            'jurusan-s2' => '',
            'nama-s3' => '',
            'kota-s3' => '',
            'tahunlulus-s3' => '',
            'fakultas-s3' => '',
            'jurusan-s3' => '',

            'periode' => '',
            'tempat' => '',
            'posisi' => ''

        ]);
        // DATA PEGAWAI MODEL
        $dataPegawai = new DataPegawai;
        $dataPegawai->nik_sekolah = $request->input('nik-sekolah');
        $dataPegawai->nik_dt = $request->input('nik-dt');
        $dataPegawai->nuptk = $request->input('nuptk');
        $dataPegawai->no_ktp = $request->input('ktp');
        $dataPegawai->nama_pegawai = $request->input('nama-pegawai');
        $dataPegawai->tempat_lahir = $request->input('tempat-lahir');
        $dataPegawai->tanggal_lahir = $request->input('tanggal-lahir');
        $dataPegawai->jenis_kelamin = $request->input('jenis-kelamin');
        $dataPegawai->gol_darah = $request->input('gol-darah');
        $dataPegawai->alamat = $request->input('alamat');
        $dataPegawai->provinsi = $request->input('provinsi');
        $dataPegawai->kabupaten_kota = $request->input('kabupaten');
        $dataPegawai->kecamatan = $request->input('kecamatan');
        $dataPegawai->desa_kelurahan = $request->input('desa-kelurahan');
        $dataPegawai->agama = $request->input('agama');
        $dataPegawai->status_pernikahan = $request->input('status-pernikahan');
        $dataPegawai->warga_negara = $request->input('warga-negara');
        $dataPegawai->no_hp1 = $request->input('no_hp1');
        $dataPegawai->no_hp2 = $request->input('no_hp2');
        $dataPegawai->tgl_masuk = $request->input('masuk');
        $dataPegawai->status_aktif = $request->input('status_aktif');
        $dataPegawai->kontrak_kerja = $request->input('kontrak');
        $dataPegawai->bagian = $request->input('bagian');
        $dataPegawai->jabatan_utama = $request->input('jabatan-utama');
        $dataPegawai->jabatan_kedua = $request->input('jabatan-kedua');
        $dataPegawai->level_user = $request->input('level');
        $dataPegawai->status_pegawai = $request->input('status-pegawai');
        $dataPegawai->email = $request->input('email');
        $dataPegawai->ktp = $request->input('check-ktp');
        $dataPegawai->kk = $request->input('check-kk');
        $dataPegawai->ijazah = $request->input('check-ijazah');
        $dataPegawai->skck = $request->input('check-skck');
        $dataPegawai->surat_keterangan_dokter = $request->input('check-skd');
        $dataPegawai->surat_rekomendasi_kerja = $request->input('check-srk');
        $dataPegawai->sertifikat_keahlian = $request->input('check-sr');
        $dataPegawai->kartu_kuning = $request->input('check-kuning');
        $dataPegawai->npwp = $request->input('check-npwp');
        $dataPegawai->foto = Storage::disk('public')->put('product', $request->file('foto'));
        $dataPegawai->save();

        // KARTU KELUARGA MODEL
        $kartuKeluarga = new KartuKeluarga;
        $kartuKeluarga->id_user = $dataPegawai->id;
        $kartuKeluarga->nik = $request->input('nik');
        $kartuKeluarga->alamat = $request->input('alamat');
        $kartuKeluarga->rt = $request->input('rt');
        $kartuKeluarga->rw = $request->input('rw');
        $kartuKeluarga->desa_kelurahan = $request->input('desa-kelurahan');
        $kartuKeluarga->kecamatan = $request->input('kecamatan');
        $kartuKeluarga->kabupaten_kota = $request->input('kabupaten_kota');
        $kartuKeluarga->provinsi = $request->input('provinsi');
        $kartuKeluarga->kode_pos = $request->input('kodepos');
        $kartuKeluarga->jumlah_anggota_kk = $request->input('jumlah-anggota-keluarga');
        $kartuKeluarga->save();

        // RIWAYAT PENDIDIKAN MODEL
        $riwayatPendidikan = new RiwayatPendidikan;
        $riwayatPendidikan->id_user = $dataPegawai->id;
        $riwayatPendidikan->nama_sd = $request->input('nama-sd');
        $riwayatPendidikan->kota_sd = $request->input('kota-sd');
        $riwayatPendidikan->tahunlulus_sd = $request->input('tahunlulus-sd');
        $riwayatPendidikan->fakultas_sd = $request->input('fakultas-sd');
        $riwayatPendidikan->jurusan_sd = $request->input('jurusan-sd');
        $riwayatPendidikan->nama_smp = $request->input('nama-smp');
        $riwayatPendidikan->kota_smp = $request->input('kota-smp');
        $riwayatPendidikan->tahunlulus_smp = $request->input('tahunlulus-smp');
        $riwayatPendidikan->fakultas_smp = $request->input('fakultas-smp');
        $riwayatPendidikan->jurusan_smp = $request->input('jurusan-smp');
        $riwayatPendidikan->nama_smasmk = $request->input('nama-smasmk');
        $riwayatPendidikan->kota_smasmk = $request->input('kota-smasmk');
        $riwayatPendidikan->tahunlulus_smasmk = $request->input('tahunlulus-smasmk');
        $riwayatPendidikan->fakultas_smasmk = $request->input('fakultas-smasmk');
        $riwayatPendidikan->jurusan_smasmk = $request->input('jurusan-smasmk');
        $riwayatPendidikan->nama_d1 = $request->input('nama-d1');
        $riwayatPendidikan->kota_d1 = $request->input('kota-d1');
        $riwayatPendidikan->tahunlulus_d1 = $request->input('tahunlulus-d1');
        $riwayatPendidikan->fakultas_d1 = $request->input('fakultas-d1');
        $riwayatPendidikan->jurusan_d1 = $request->input('jurusan-d1');
        $riwayatPendidikan->nama_d2 = $request->input('nama-d2');
        $riwayatPendidikan->kota_d2 = $request->input('kota-d2');
        $riwayatPendidikan->tahunlulus_d2 = $request->input('tahunlulus-d2');
        $riwayatPendidikan->fakultas_d2 = $request->input('fakultas-d2');
        $riwayatPendidikan->jurusan_d2 = $request->input('jurusan-d2');
        $riwayatPendidikan->nama_d3 = $request->input('nama-d3');
        $riwayatPendidikan->kota_d3 = $request->input('kota-d3');
        $riwayatPendidikan->tahunlulus_d3 = $request->input('tahunlulus-d3');
        $riwayatPendidikan->fakultas_d3 = $request->input('fakultas-d3');
        $riwayatPendidikan->jurusan_d3 = $request->input('jurusan-d3');
        $riwayatPendidikan->nama_s1 = $request->input('nama-s1');
        $riwayatPendidikan->kota_s1 = $request->input('kota-s1');
        $riwayatPendidikan->tahunlulus_s1 = $request->input('tahunlulus-s1');
        $riwayatPendidikan->fakultas_s1 = $request->input('fakultas-s1');
        $riwayatPendidikan->jurusan_s1 = $request->input('jurusan-s1');
        $riwayatPendidikan->nama_s2 = $request->input('nama-s2');
        $riwayatPendidikan->kota_s2 = $request->input('kota-s2');
        $riwayatPendidikan->tahunlulus_s2 = $request->input('tahunlulus-s2');
        $riwayatPendidikan->fakultas_s2 = $request->input('fakultas-s2');
        $riwayatPendidikan->jurusan_s2 = $request->input('jurusan-s2');
        $riwayatPendidikan->nama_s3 = $request->input('nama-s3');
        $riwayatPendidikan->kota_s3 = $request->input('kota-s3');
        $riwayatPendidikan->tahunlulus_s3 = $request->input('tahunlulus-s3');
        $riwayatPendidikan->fakultas_s3 = $request->input('fakultas-s3');
        $riwayatPendidikan->jurusan_s3 = $request->input('jurusan-s3');
        $riwayatPendidikan->save();

        // PENGALAMAN KERJA MODEL
        $pengalamanBekerja = new PengalamanBekerja;
        $pengalamanBekerja->id_user = $dataPegawai->id;
        $pengalamanBekerja->periode = $request->input('periode');
        $pengalamanBekerja->tempat = $request->input('tempat');
        $pengalamanBekerja->posisi = $request->input('posisi');
        $pengalamanBekerja->save();
        return redirect()->back()->with('success', 'Data Pegawai berhasil ditambahkan');
    }

    /**
     * Display all pegawai
     *
     * 
     * @return Response
     */
    public function showDataPegawai(Request $request)
    {

        // show data pegawai with specific collumn
        $dataPegawai = DataPegawai::all();
        return view('sdm.data-pegawai', compact('dataPegawai'));
        // return $dataPegawai;

    }

    /**
     * Delete Pegawai
     * 
     * @return Response
     */
    public function deletePegawai(Request $request)
    {
        $id_pegawai = $request->input('id');
        $dataPegawai = DataPegawai::where('id', $id_pegawai)->first();

        // remove foto pegawai from storage
        unlink(storage_path('app/public/' . $dataPegawai->foto));

        DB::table('data_pegawai')->where('id', $id_pegawai)->delete();
        DB::table('kartu_keluarga')->where('id_user', $id_pegawai)->delete();
        DB::table('riwayat_pendidikan')->where('id_user', $id_pegawai)->delete();
        DB::table('pengalaman_bekerja')->where('id_user', $id_pegawai)->delete();

        return redirect()->back()->with('success', 'Data Pegawai berhasil dihapus');
    }
}
