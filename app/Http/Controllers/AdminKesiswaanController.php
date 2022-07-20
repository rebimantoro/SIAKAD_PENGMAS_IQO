<?php

namespace App\Http\Controllers;

use App\Models\keluargaSiswa;
use App\Models\pendidikanSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminKesiswaanController extends Controller
{
    /**
     * Create Data Siswa
     * @return Response
     */
    public function createDataSiswa(Request $request)
    {
        // return $request;
        $request->validate([
            'nik' => 'required',
            'akte' => 'required',
            'kk' => 'required',
            'nisn' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'bahasa' => 'required',
            // Hubungan Keluarga
            'status_keluarga' => 'required',
            'status_anak' => 'required',
            'tinggal_bersama' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            // Status siswa
            'status_aktif' => 'required',
            'status_pendaftaran' => 'required',
            'tahun_akademik' => 'required',
            'tanggal_belajar' => 'required',
            // Kelengkapan Data
            'nisn' => 'required',
            'akte' => 'required',
            'kk' => 'required',
            'ijazah' => 'required',
            'skhun' => 'required',
            'foto' => 'required', 'mimes:jpg,jpeg,png',
            // Alamat Siswa
            'provinsi' => 'required',
            'kab_kota' => 'required',
            'kecamatan' => 'required',
            'desa_kel' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kode_pos' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'jarak' => 'required',
            'transportasi' => 'required',
            'waktu_tempuh_jam' => 'required',
            'waktu_tempuh_menit' => 'required',
            // kesehatan
            'golongan_darah' => 'required',
            'penyakit_kronis' => '',
            'kelainan' => '',
            'kebutuhan_khusus' => '',
            'tb' => 'required',
            'bb' => 'required',
            // hobi
            'kesenian' => 'required',
            'olahraga' => 'required',
            'organisasi' => 'required',
            'hobi_lain' => 'required',
            // lainnya
            'kelayakan_pip' => '',
            'alasan_pip' => '',
            'kode_bank' => '',
            'no_rekening' => '',
            'kps' => '',
            'no_kps' => '',
            'kks' => '',
            'no_kip' => '',
            'nama_kip' => '',
            'no_kks' => '',

            // riwayat pendidikan
            // TK
            'nama_tk',
            'tanggal_ijazah_tk',
            'ijazah_tk',
            'ujian_tk',
            'tk_negri',
            'tk_swasta',
            // SD
            'nama_sd',
            'tanggal_ijazah_sd',
            'ijazah_sd',
            'ujian_sd',
            'sd_negri',
            'sd_swasta',
            // SMP
            'nama_smp',
            'tanggal_ijazah_smp',
            'ijazah_smp',
            'ujian_smp',
            'smp_negri',
            'smp_swasta',
            // pindahan
            'pindahan_type',
            'alasan_pindah',
            'no_surat_pindah',
            'sekolah_asal',
            'alamat_sekolah_asal',
            // orang tua
            // Ayah
            'nama_ayah',
            'nik_ayah',
            'tempat_lahir_ayah',
            'tanggal_lahir_ayah',
            'agama_ayah',
            'kebutuhan_khusus_ayah',
            'telp_ayah',
            'email_ayah',
            'wn_ayah',
            'status_hidup_ayah',
            'pendidikan_ayah',
            'lembaga_pendidikan_ayah',
            'profesi_ayah',
            'penghasilan_ayah',
            'nrp_ayah',
            // ibu
            'nama_ibu',
            'nik_ibu',
            'tempat_lahir_ibu',
            'tanggal_lahir_ibu',
            'agama_ibu',
            'kebutuhan_khusus_ibu',
            'telp_ibu',
            'email_ibu',
            'wn_ibu',
            'status_hidup_ibu',
            'pendidikan_ibu',
            'lembaga_pendidikan_ibu',
            'profesi_ibu',
            'penghasilan_ibu',
            'nrp_ibu',
            // wali
            'nama_wali',
            'nik_wali',
            'tempat_lahir_wali',
            'tanggal_lahir_wali',
            'agama_wali',
            'kebutuhan_khusus_wali',
            'telp_wali',
            'email_wali',
            'wn_wali',
            'status_hidup_wali',
            'pendidikan_wali',
            'lembaga_pendidikan_wali',
            'profesi_wali',
            'penghasilan_wali',
            'nrp_wali',
        ]);

        $siswa = new Siswa;
        $siswa->nik = $request->input('nik');
        $siswa->akte = $request->input('akte');
        $siswa->kk = $request->input('kk');
        $siswa->nisn = $request->input('nisn');
        $siswa->nisn_siswa = $request->input('nisn_siswa');
        $siswa->akte_siswa = $request->input('akte_siswa');
        $siswa->kk_siswa = $request->input('kk_siswa');
        $siswa->ijazah_siswa = Storage::disk('public')->put('ijazah', $request->file('ijazah_siswa'));
        $siswa->skhun_siswa = Storage::disk('public')->put('skhun', $request->file('skhun_siswa'));
        $siswa->nama_lengkap = $request->input('nama_lengkap');
        $siswa->nama_panggilan = $request->input('nama_panggilan');
        $siswa->jenis_kelamin = $request->input('jenis_kelamin');
        $siswa->tempat_lahir = $request->input('tempat_lahir');
        $siswa->tanggal_lahir = $request->input('tanggal_lahir');
        $siswa->agama = $request->input('agama');
        $siswa->kewarganegaraan = $request->input('kewarganegaraan');
        $siswa->bahasa = $request->input('bahasa');
        $siswa->status_keluarga = $request->input('status_keluarga');
        $siswa->status_anak = $request->input('status_anak');
        $siswa->tinggal_bersama = $request->input('tinggal_bersama');
        $siswa->anak_ke = $request->input('anak_ke');
        $siswa->jumlah_saudara = $request->input('jumlah_saudara');
        $siswa->status_aktif = $request->input('status_aktif');
        $siswa->status_pendaftaran = $request->input('status_pendaftaran');
        $siswa->tahun_akademik = $request->input('tahun_akademik');
        $siswa->tanggal_belajar = $request->input('tanggal_belajar');
        $siswa->ijazah = $request->input('ijazah');
        $siswa->skhun = $request->input('skhun');
        $siswa->foto = Storage::disk('public')->put('siswa', $request->file('foto'));
        $siswa->provinsi = $request->input('provinsi');
        $siswa->kab_kota = $request->input('kab_kota');
        $siswa->kecamatan = $request->input('kecamatan');
        $siswa->desa_kel = $request->input('desa_kel');
        $siswa->alamat = $request->input('alamat');
        $siswa->rt = $request->input('rt');
        $siswa->rw = $request->input('rw');
        $siswa->kode_pos = $request->input('kode_pos');
        $siswa->no_telp = $request->input('no_telp');
        $siswa->email = $request->input('email');
        $siswa->jarak = $request->input('jarak');
        $siswa->transportasi = $request->input('transportasi');
        $siswa->waktu_tempuh_jam = $request->input('waktu_tempuh_jam');
        $siswa->waktu_tempuh_menit = $request->input('waktu_tempuh_menit');
        $siswa->golongan_darah = $request->input('golongan_darah');
        $siswa->penyakit_kronis = $request->input('penyakit_kronis');
        $siswa->kelainan = $request->input('kelainan');
        $siswa->kebutuhan_khusus = $request->input('kebutuhan_khusus');
        $siswa->tb = $request->input('tb');
        $siswa->bb = $request->input('bb');
        $siswa->kesenian = $request->input('kesenian');
        $siswa->olahraga = $request->input('olahraga');
        $siswa->organisasi = $request->input('organisasi');
        $siswa->hobi_lain = $request->input('hobi_lain');
        $siswa->kelayakan_pip = $request->input('kelayakan_pip');
        $siswa->alasan_pip = $request->input('alasan_pip');
        $siswa->kode_bank = $request->input('kode_bank');
        $siswa->no_rekening = $request->input('no_rekening');
        $siswa->nama_rekening = $request->input('nama_rekening');
        $siswa->kps = $request->input('kps');
        $siswa->no_kps = $request->input('no_kps');
        $siswa->kks = $request->input('kks');
        $siswa->no_kip = $request->input('no_kip');
        $siswa->nama_kip = $request->input('nama_kip');
        $siswa->no_kks = $request->input('no_kks');
        $siswa->save();
        
        $id_siswa = $siswa->id;
        
        $pendidikan = new pendidikanSiswa();
        $pendidikan->id_siswa = $id_siswa;
        $pendidikan->nama_tk = $request->input('nama_tk');
        $pendidikan->tanggal_ijazah_tk = $request->input('tanggal_ijazah_tk');
        $pendidikan->ijazah_tk = $request->input('ijazah_tk');
        $pendidikan->ujian_tk = $request->input('ujian_tk');
        $pendidikan->tk_type = $request->input('tk_type');
        $pendidikan->nama_sd = $request->input('nama_sd');
        $pendidikan->tanggal_ijazah_sd = $request->input('tanggal_ijazah_sd');
        $pendidikan->ijazah_sd = $request->input('ijazah-sd');
        $pendidikan->ujian_sd = $request->input('ujian_sd');
        $pendidikan->sd_type = $request->input('sd_type');
        $pendidikan->nama_smp = $request->input('nama_smp');
        $pendidikan->tanggal_ijazah_smp = $request->input('tanggal_ijazah_smp');
        $pendidikan->ijazah_smp = $request->input('ijazah_smp');
        $pendidikan->ujian_smp = $request->input('ujian_smp');
        $pendidikan->smp_type = $request->input('smp_type');
        $pendidikan->pindahan_type = $request->input('pindahan_type');
        $pendidikan->alasan_pindah = $request->input('alasan_pindah');
        $pendidikan->no_surat_pindah = $request->input('no_surat_pindah');
        $pendidikan->sekolah_asal = $request->input('sekolah_asal');
        $pendidikan->alamat_sekolah_asal = $request->input('alamat_sekolah_asal');
        $pendidikan->save();

        $ortu = new keluargaSiswa;
        $ortu->id_siswa = $id_siswa;
        $ortu->nama_ayah = $request->input('nama_ayah');
        $ortu->nik_ayah = $request->input('nik_ayah');
        $ortu->tempat_lahir_ayah = $request->input('tempat_lahir_ayah');
        $ortu->tanggal_lahir_ayah = $request->input('tanggal_lahir_ayah');
        $ortu->agama_ayah = $request->input('agama_ayah');
        $ortu->kebutuhan_khusus_ayah = $request->input('kebutuhan_khusus_ayah');
        $ortu->telp_ayah = $request->input('telp_ayah');
        $ortu->email_ayah = $request->input('email_ayah');
        $ortu->wn_ayah = $request->input('wn_ayah');
        $ortu->status_hidup_ayah = $request->input('status_hidup_ayah');
        $ortu->pendidikan_ayah = $request->input('pendidikan_ayah');
        $ortu->lembaga_pendidikan_ayah = $request->input('lembaga_pendidikan_ayah');
        $ortu->profesi_ayah = $request->input('profesi_ayah');
        $ortu->penghasilan_ayah = $request->input('penghasilan_ayah');
        $ortu->nrp_ayah = $request->input('nrp_ayah');
        $ortu->nama_ibu = $request->input('nama_ibu');
        $ortu->nik_ibu = $request->input('nik_ibu');
        $ortu->tempat_lahir_ibu = $request->input('tempat_lahir_ibu');
        $ortu->tanggal_lahir_ibu = $request->input('tanggal_lahir_ibu');
        $ortu->agama_ibu = $request->input('agama_ibu');
        $ortu->kebutuhan_khusus_ibu = $request->input('kebutuhan_khusus_ibu');
        $ortu->telp_ibu = $request->input('telp_ibu');
        $ortu->email_ibu = $request->input('email_ibu');
        $ortu->wn_ibu = $request->input('wn_ibu');
        $ortu->status_hidup_ibu = $request->input('status_hidup_ibu');
        $ortu->pendidikan_ibu = $request->input('pendidikan_ibu');
        $ortu->lembaga_pendidikan_ibu = $request->input('lembaga_pendidikan_ibu');
        $ortu->profesi_ibu = $request->input('profesi_ibu');
        $ortu->penghasilan_ibu = $request->input('penghasilan_ibu');
        $ortu->nrp_ibu = $request->input('nrp_ibu');
        $ortu->nama_wali = $request->input('nama_wali');
        $ortu->nik_wali = $request->input('nik_wali');
        $ortu->tempat_lahir_wali = $request->input('tempat_lahir_wali');
        $ortu->tanggal_lahir_wali = $request->input('tanggal_lahir_wali');
        $ortu->agama_wali = $request->input('agama_wali');
        $ortu->kebutuhan_khusus_wali = $request->input('kebutuhan_khusus_wali');
        $ortu->telp_wali = $request->input('telp_wali');
        $ortu->email_wali = $request->input('email_wali');
        $ortu->wn_wali = $request->input('wn_wali');
        $ortu->status_hidup_wali = $request->input('status_hidup_wali');
        $ortu->pendidikan_wali = $request->input('pendidikan_wali');
        $ortu->lembaga_pendidikan_wali = $request->input('lembaga_pendidikan_wali');
        $ortu->profesi_wali = $request->input('profesi_wali');
        $ortu->penghasilan_wali = $request->input('penghasilan_wali');
        $ortu->nrp_wali = $request->input('nrp_wali');
        $ortu->save();

        return redirect()->back()->with('success', 'Data Siswa berhasil ditambahkan');
    }

    /**
     * Show Data Siswa
     * 
     * @return Response
     */
    public function showDataSiswa(Request $request) {
        $siswas = Siswa::all();
        $pendidikan = pendidikanSiswa::all();
        $ortu = keluargaSiswa::all();
        return view('siswa.data-siswa', compact('siswas', 'pendidikan', 'ortu'));
    }

    public function detailDataSiswa(Request $request){
        $id_siswa = $request->input('id_siswa');
        $siswas = Siswa::where('id_siswa', $id_siswa)->first();
        $pendidikan = pendidikanSiswa::where('id_siswa', $id_siswa)->first();
        $ortu = keluargaSiswa::where('id_siswa', $id_siswa)->first();
        return view('siswa.detail-siswa', compact('siswas', 'pendidikan', 'ortu'));
    }

    public function deleteDataSiswa(Request $request){
        $id_siswa = $request->input('id_siswa');
        $siswas = Siswa::where('id_siswa', $id_siswa)->first();
        
        unlink(storage_path('app/public/'.$siswas->foto));
        unlink(storage_path('app/public/'.$siswas->ijazah_siswa));
        unlink(storage_path('app/public/'.$siswas->skhun_siswa));
        
        DB::table('siswa')->where('id_siswa', $id_siswa)->delete();
        DB::table('pendidikan_siswa')->where('id_siswa', $id_siswa)->delete();
        DB::table('keluarga_siswa')->where('id_siswa', $id_siswa)->delete();
        

        return redirect()->back()->with('delete', 'Data Siswa berhasil dihapus');
    }

}
