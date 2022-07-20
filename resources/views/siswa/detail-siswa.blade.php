@extends('layouts.admin')
@section('siswa')
    <?php $siswa = 'active'; ?>
@endsection
@section('data-siswa')
    active
@endsection
@section('content')
<style>
    a{
        color: white;
    }
</style>
<div class="pagetitle">
    <h1>Data Siswa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Siswa</li>
            <li class="breadcrumb-item">Data Siswa</li>
            <li class="breadcrumb-item active">Tambah Siswa</li>
        </ol>
    </nav>
</div>

<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Input Data Siswa</h1>

                    </div>
                <div class="card-body">

                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="siswa-tab" data-bs-toggle="tab" data-bs-target="#bordered-siswa" type="button" role="tab" aria-controls="siswa" aria-selected="true">Data Siswa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="alamat-tab" data-bs-toggle="tab" data-bs-target="#bordered-alamat" type="button" role="tab" aria-controls="alamat" aria-selected="false">Alamat</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="kesehatan-tab" data-bs-toggle="tab" data-bs-target="#bordered-kesehatan" type="button" role="tab" aria-controls="kesehatan" aria-selected="false">Kesehatan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pendidikan-tab" data-bs-toggle="tab" data-bs-target="#bordered-pendidikan" type="button" role="tab" aria-controls="pendidikan" aria-selected="false">Riwayat Pendidikan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pindahan-tab" data-bs-toggle="tab" data-bs-target="#bordered-pindahan" type="button" role="tab" aria-controls="pindahan" aria-selected="false">Pindahan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="keluarga-tab" data-bs-toggle="tab" data-bs-target="#bordered-keluarga" type="button" role="tab" aria-controls="keluarga" aria-selected="false">Data Keluarga</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="hobi-tab" data-bs-toggle="tab" data-bs-target="#bordered-hobi" type="button" role="tab" aria-controls="hobi" aria-selected="false">Hobi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="lainnya-tab" data-bs-toggle="tab" data-bs-target="#bordered-lainnya" type="button" role="tab" aria-controls="lainnya" aria-selected="false">Lainnya</button>
                        </li>
                    </ul>

                    <form method="POST" action="{{ route('tambah-siswa') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content pt-2" id="borderedTabContent">
                        <!-- Data Siswa -->
                        <div class="tab-pane fade show active" id="bordered-siswa" role="tabpanel" aria-labelledby="siswa-tab">
                            <div class="mb-5">  
                                <div class="pt-2 px-2 mb-2">
                                    <label for="nama-sekolah">Nama Sekolah</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nama-sekolah" readonly name="nama-sekolah" value="SMK Daarut"> 
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Pribadi Siswa</h4>
                            <br><br>
                            <div class="mb-5">                                              
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik_siswa" name="nik" required placeholder="Masukkan NIK" value={{$siswas->nik}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="akte">No. Akte</label>
                                        <input type="text" class="form-control" id="akte" required name="akte_siswa" placeholder="Masukkan No. Akte" value={{$siswas->akte_siswa}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="kk">No. KK</label>
                                        <input type="text" class="form-control" id="kk" required name="kk_siswa" placeholder="Masukkan No. KK" value={{$siswas->kk_siswa}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="nisn">NISN</label>
                                        <input type="text" class="form-control" id="nisn" required name="nisn_siswa" placeholder="Masukkan NISN" value={{$siswas->nisn_siswa}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="nama-lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama-lengkap" name="nama_lengkap" required placeholder="Masukkan Nama Lengkap" value={{$siswas->nama_lengkap}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="nama-panggilan">Nama Panggilan</label>
                                        <input type="text" class="form-control" id="nama-panggilan" required name="nama_panggilan" placeholder="Masukkan Nama Panggilan" value={{$siswas->nama_panggilan}} disabled>
                                    </div>
                                </div>
                                {{-- upload skhun pdf --}}
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="skhun">SKHUN</label>
                                        <br>
                                        <a href="{{ asset('storage/'.$siswas->skhun_siswa) }}" target="_blank">
                                            <button class="btn btn-primary">
                                               SKHUN
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="ijazah">Ijazah</label>
                                        <br>
                                        <a href="{{ asset('storage/'.$siswas->ijazah_siswa) }}" target="_blank">
                                            <button class="btn btn-primary">
                                                Ijazah
                                            </button>
                                         </a>
                                    </div>
                                </div>
                                <div class="px-2 mb-3">
                                    <label for="jk">Jenis Kelamin</label>
                                    <input type="text" class="form-control" value="@if($siswas->jenis_kelamin == 'lk') Laki-laki @else Perempuan @endif" disabled>                                    
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tempat-lahir">Tempat</label>
                                        <input type="text" class="form-control" id="tempat-lahir" required name="tempat_lahir" placeholder="Masukkan Tempat Lahir" value={{$siswas->tempat_lahir}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal-lahir" required name="tanggal_lahir" value={{$siswas->tanggal_lahir}} disabled>
                                    </div>
                                </div>
                                {{-- skip --}}
                                <div class="row px-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="agama">Agama</label>
                                        <input type="text" class="form-control" id="agama" required name="agama_siswa" value={{$siswas->agama}} disabled>
                                    </div>
                                    {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="warga-negara">Warga Negara</label>
                                        <input type="text" class="form-control" id="warga-negara" required name="wn" value={{$siswas->kewarganegaraan}} disabled>
                                    </div>
                                </div>
                                <div class="pt-2 px-2 mb-2">
                                    <label for="bahasa">Bahasa Sehari-Hari</label>
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" id="bahasa" required name="bahasa" value={{$siswas->bahasa}} disabled>
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Hubungan Keluarga</h4>
                            <br><br>
                            <div class="mb-5">                                              
                                <div class="row px-2 mb-2">
                                {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="status-hubungan">Status Hubungan Keluarga</label>
                                        <input type="text" class="form-control" id="status-hubungan" required name="status_hubungan" value={{$siswas->status_keluarga}} disabled>
                                    </div>
                                    {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="status-anak">Status Anak</label>
                                        <input type="text" class="form-control" id="status-anak" required name="status_anak" value={{$siswas->status_anak}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="tinggal-bersama">Tinggal Bersama</label>
                                        <input type="text" class="form-control" id="tinggal-bersama" required name="tinggal_bersama" value={{$siswas->tinggal_bersama}} disabled>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="anak-ke">Anak Ke-</label>
                                        <input type="text" class="form-control" id="anak-ke" required name="anak_ke" placeholder="Isi Dengan Angka" value={{$siswas->anak_ke}} disabled>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="jumlah-saudara">Jumlah Saudara</label>
                                        <input type="text" class="form-control" id="jumlah-saudara" required name="jumlah_saudara" placeholder="Isi Dengan Angka" value={{$siswas->jumlah_saudara}} disabled>
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Status Siswa</h4>
                            <br><br>
                            <div class="mb-5">                                              
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="status-aktif">Status Aktif</label>
                                        <input type="text" class="form-control" id="status-aktif" required name="status_aktif" value={{$siswas->status_aktif}} disabled>
                                    </div>
                                    {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="status-awal">Status Awal Pendaftaran</label>
                                        <input type="text" class="form-control" id="status-awal" required name="status_awal" value={{$siswas->status_pendaftaran}} disabled>
                                    </div>
                                </div>
                                {{-- skip --}}
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tahun-akademik">Tahun Akademik</label>
                                        <input type="text" class="form-control" id="tahun-akademik" required name="tahun_akademik" value={{$siswas->tahun_akademik}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-belajar">Tanggal Mulai Belajar</label>
                                        <input type="date" class="form-control" id="tanggal-belajar" required name="tanggal_belajar" value={{$siswas->tanggal_belajar}} disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-block" onClick="nextTab(0)">Next</button>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="tab-pane fade" id="bordered-alamat" role="tabpanel" aria-labelledby="alamat-tab">
                        <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Alamat Siswa</h4>
                            <br><br>
                                <div class="mb-3">                                              
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="provinsi">Provinsi</label>
                                            <input type="text" class="form-control" id="blok" name="provinsi" required placeholder="Masukkan Provinsi" value={{$siswas->provinsi}} disabled>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="kab-kota">Kabupaten/Kota</label>
                                            <input type="text" class="form-control" id="kab-kota" required name="kab_kota" placeholder="Masukkan Kabupatne/Kota" value={{$siswas->kab_kota}} disabled>
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required placeholder="Masukkan Kecamatan" value={{$siswas->kecamatan}} disabled>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="desa-kel">Desa/Kelurahan</label>
                                            <input type="text" class="form-control" id="desa-kel" required name="desa_kel" placeholder="Masukkan Desa/Kelurahan" value={{$siswas->desa_kel}} disabled>
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Masukkan Alamat" value={{$siswas->alamat}} disabled>
                                        </div>
                                        <div class="col-md-1 mb-2">
                                            <label for="rt">RT</label>
                                            <input type="text" class="form-control" id="rt" required name="rt" placeholder="000" value={{$siswas->rt}} disabled>
                                        </div>
                                        <div class="col-md-1 mb-2">
                                            <label for="rw">RW</label>
                                            <input type="text" class="form-control" id="rw" required name="rw" placeholder="000" value={{$siswas->rw}} disabled>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="kode-pos">Kode Pos</label>
                                            <input type="text" class="form-control" id="kode-pos" required name="kode_pos" placeholder="Masukkan Kode Pos" value={{$siswas->kode_pos}} disabled>
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="no_telp">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="no_telp" required name="no_telp" placeholder="Masukkan Nomor Telepon" value={{$siswas->no_telp}} disabled>
                                            </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" required name="email" placeholder="Masukkan Email" value={{$siswas->email}} disabled>
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="no_telp">Jarak Ke Sekolah</label>
                                            <input type="text" class="form-control" id="jarak" required name="jarak" placeholder="Masukkan Jarak" value={{$siswas->jarak}} disabled>
                                        </div>
                                        {{-- skip --}}
                                        <div class="col-md-6 mb-2">
                                            <label for="transportasi">Moda Transportasi</label>
                                            <input type="text" class="form-control" id="transportasi" required name="transportasi" placeholder="Masukkan Moda Transportasi" value={{$siswas->transportasi}} disabled>
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <label for="waktu-tempuh-jam">Waktu Tempuh Ke Sekolah *) Jam Isikan Dengan 00 , Jika Hanya Dalam Hitungan Menit</label>
                                        <div class="col-md-6 mb-2">
                                            <label for="waktu-tempuh-jam">Jam</label>
                                            <input type="text" class="form-control" id="waktu-tempuh-jam" required name="waktu_tempuh_jam" placeholder="00" value={{$siswas->waktu_tempuh_jam}} disabled>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="waktu-tempuh-menit">Menit</label>
                                            <input type="text" class="form-control" id="waktu-tempuh-menit" required name="waktu_tempuh_menit" placeholder="00" value={{$siswas->waktu_tempuh_menit}} disabled>
                                        </div>
                                    </div>
                                </div>
                            <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-block" style="margin-right:10px" onClick="prevTab(1)">Prev</button>
                                    <button type="button" class="btn btn-primary btn-block" onClick="nextTab(1)">Next</button>
                            </div>
                        </div>

                        <!-- kesehatan -->
                        <div class="tab-pane fade" id="bordered-kesehatan" role="tabpanel" aria-labelledby="kesehatan-tab">
                        <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Kesehatan Siswa</h4>
                            <br><br>
                            {{-- skip --}}
                                <div class="mb-3">                                              
                                    <div class="px-2 mb-2">
                                        <label for="gol-darah">Golongan Darah</label>
                                        <input type="text" class="form-control" id="gol-darah" required name="gol_darah" placeholder="Masukkan Golongan Darah" value={{$siswas->golongan_darah}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="penyakit-kronis">Penyakit Kronis</label>
                                        <input type="text" class="form-control" id="penyakit-kronis" required name="penyakit_kronis" placeholder="Masukkan Penyakit Kronis" value={{$siswas->penyakit_kronis}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="kelainan">Kelainan</label>
                                        <input type="text" class="form-control" id="kelainan" required name="kelainan" placeholder="Masukkan Kelainan" value={{$siswas->kelainan}} disabled>
                                    </div>
                                    <div class="px-2 mb-2">
                                        <label for="kebutuhan-khusus">Kebutuhan Khusus</label>
                                        <input type="text" class="form-control" id="kebutuhan-khusus" required name="kebutuhan_khusus" placeholder="Masukkan Kebutuhan Khusus" value={{$siswas->kebutuhan_khusus}} disabled>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="tb">Tinggi Badan</label>
                                            <input type="text" class="form-control" id="tb" required name="tb" placeholder="Masukkan Tinggi Badan" value={{$siswas->tb}} disabled>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="bb">Berat Badan</label>
                                            <input type="text" class="form-control" id="bb" required name="bb" placeholder="Masukkan Berat Badan" value={{$siswas->bb}} disabled> 
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-block" style="margin-right:10px" onClick="prevTab(2)">Prev</button>
                                    <button type="button" class="btn btn-primary btn-block" onClick="nextTab(2)">Next</button>
                                </div>
                        </div>

                        <!-- riwayat pendidikan -->
                        <div class="tab-pane fade" id="bordered-pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Jenjang TK</h4>
                            <br><br>
                            <!-- TK -->
                                <div class="mb-5">  
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="jenjang">Jenjang</label>
                                            <input type="text" class="form-control" id="jenjang" readonly name="jenjang" value="TK">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="nama-tk">Nama Sekolah Asal</label>
                                            <input type="text" class="form-control" id="nama-tk" required name="nama_tk" placeholder="Masukkan Nama Sekolah Asal" value={{$pendidikan->nama_tk}} disabled>
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="tanggal-ijazah-tk">Tanggal Ijazah</label>
                                            <input type="date" class="form-control" id="tanggal-ijazah-tk" required name="tanggal_ijazah_tk" placeholder="Masukkan Tanggal Ijazah" value={{$pendidikan->tanggal_ijazah_tk}} disabled>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="ijazah-tk">No. Ijazah</label>
                                            <input type="text" class="form-control" id="ijazah-tk" required name="ijazah_tk" placeholder="Masukkan No. Ijazah" value={{$pendidikan->ijazah_tk}} disabled>
                                        </div>
                                    </div> 

                                    <div class="pt-2 px-2 mb-2">
                                        <label for="ujian-tk">No. Ujian Sebelumnya</label>
                                        <input type="text" class="form-control" id="ujian-tk" required name="ujian_tk" placeholder="Masukkan No. Ujian Sebelumnya" value={{$pendidikan->ujian_tk}} disabled>
                                    </div>

                                    <div class="pt-2 px-2 mb-2">
                                        <label>Status TK</label>
                                        <input type="text" class="form-control" id="status-tk" required name="status_tk" placeholder="Masukkan Status TK" value={{$pendidikan->tk_type}} disabled>
                                    </div>
                                </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Jenjang SD</h4>
                            <br><br>
                            <!-- SD -->
                                <div class="mb-5">  
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="jenjang">Jenjang</label>
                                            <input type="text" class="form-control" id="jenjang" readonly name="jenjang" value="SD">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="nama-sd">Nama Sekolah Asal</label>
                                            <input type="text" class="form-control" id="nama-sd" required name="nama_sd" placeholder="Masukkan Nama Sekolah Asal" value={{$pendidikan->nama_sd}} disabled>
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="tanggal-ijazah-sd">Tanggal Ijazah</label>
                                            <input type="date" class="form-control" id="tanggal-ijazah-sd" required name="tanggal_ijazah_sd" placeholder="Masukkan Tanggal Ijazah" value={{$pendidikan->tanggal_ijazah_sd}} disabled>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="ijazah-sd">No. Ijazah</label>
                                            <input type="text" class="form-control" id="ijazah-sd" required name="ijazah_sd" placeholder="Masukkan No. Ijazah" value={{$pendidikan->ijazah_sd}} disabled>
                                        </div>
                                    </div> 

                                    <div class="pt-2 px-2 mb-2">
                                        <label for="ujian-sd">No. Ujian Sebelumnya</label>
                                        <input type="text" class="form-control" id="ujian-sd" required name="ujian_sd" placeholder="Masukkan No. Ujian Sebelumnya" value={{$pendidikan->ujian_sd}} disabled>
                                    </div>

                                    <div class="pt-2 px-2 mb-2">
                                        <label>Status SD</label>
                                        <input type="text" class="form-control" id="status-sd" required name="status_sd" placeholder="Masukkan Status SD" value={{$pendidikan->sd_type}} disabled>
                            
                                    </div>
                                </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Jenjang SMP</h4>
                            <br><br>
                            <!-- SMP -->
                                <div class="mb-5">  
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="jenjang">Jenjang</label>
                                            <input type="text" class="form-control" id="jenjang" readonly name="jenjang" value="SMP">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="nama-smp">Nama Sekolah Asal</label>
                                            <input type="text" class="form-control" id="nama-smp" required name="nama_smp" placeholder="Masukkan Nama Sekolah Asal" value={{$pendidikan->nama_smp}} disabled>
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="tanggal-ijazah-smp">Tanggal Ijazah</label>
                                            <input type="date" class="form-control" id="tanggal-ijazah-smp" required name="tanggal_ijazah_smp" placeholder="Masukkan Tanggal Ijazah" value={{$pendidikan->tanggal_ijazah_smp}} disabled>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="ijazah-smp">No. Ijazah</label>
                                            <input type="text" class="form-control" id="ijazah-smp" required name="ijazah_smp" placeholder="Masukkan No. Ijazah" value={{$pendidikan->ijazah_smp}} disabled>
                                        </div>
                                    </div> 

                                    <div class="pt-2 px-2 mb-2">
                                        <label for="ujian-smp">No. Ujian Sebelumnya</label>
                                        <input type="text" class="form-control" id="ujian-smp" required name="ujian_smp" placeholder="Masukkan No. Ujian Sebelumnya" value={{$pendidikan->ujian_smp}} disabled>
                                    </div>

                                    <div class="pt-2 px-2 mb-2">
                                        <label>Status SMP</label>
                                        <input type="text" class="form-control" id="status-smp" required name="status_smp" placeholder="Masukkan Status Sekolah Sebelumnya" value={{$pendidikan->smp_type}} disabled>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-block" style="margin-right:10px" onClick="prevTab(3)">Prev</button>
                                    <button type="button" class="btn btn-primary btn-block" onClick="nextTab(3)">Next</button>
                                </div>
                        </div>

                        <!-- pindahan -->
                        <div class="tab-pane fade" id="bordered-pindahan" role="tabpanel" aria-labelledby="pindahan-tab">
                        <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Pindahan Siswa</h4>
                            <br><br>
                                <div class="mb-3">      
                                {{-- skip --}}
                                    <div class="px-2 mb-2">
                                        <label for="dipindah-karena">Dipindahkan karena :</label>
                                        <input type="text" class="form-control" id="dipindah-karena" required name="dipindah_karena" placeholder="Masukkan Alasan Pindah" value={{$pendidikan->pindahan_type}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="alasan-pindah">Alasan Dipindahkan</label>
                                        <input type="text" class="form-control" id="alasan-pindah" required name="alasan_pindah" placeholder="Masukkan Alasan Dipindahkan" value={{$pendidikan->alasan_pindah}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="no-surat-pindah">No. Surat Pindah</label>
                                        <input type="text" class="form-control" id="no-surat-pindah" required name="no_surat_pindah" placeholder="Masukkan No. Surat Pindah" value={{$pendidikan->no_surat_pindah}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="sekolah-asal">Nama Sekolah Asal</label>
                                        <input type="text" class="form-control" id="sekolah-asal" required name="sekolah_asal" placeholder="Masukkan Nama Sekolah Asal" value={{$pendidikan->sekolah_asal}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="alamat-sekolah-asal">Alasan Dipindahkan</label>
                                        <input type="text" class="form-control" id="alamat-sekolah-asal" required name="alamat_sekolah_asal" placeholder="Masukkan Alamat Sekolah Asal" value={{$pendidikan->alamat_sekolah_asal}} disabled>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-block" style="margin-right:10px" onClick="prevTab(4)">Prev</button>
                                    <button type="button" class="btn btn-primary btn-block" onClick="nextTab(4)">Next</button>
                                </div>
                        </div>

                        <!-- data keluarga -->
                        <div class="tab-pane fade" id="bordered-keluarga" role="tabpanel" aria-labelledby="keluarga-tab">
                            <!-- ayah -->
                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Ayah</h4>
                            <br><br>
                                <div class="mb-5">                                              
                                    <div class="px-2 mb-2">
                                        <label for="nama-ayah">Nama Ayah</label>
                                        <input type="text" class="form-control" id="nama-ayah" required name="nama_ayah" placeholder="Masukkan Nama Ayah" value={{$ortu->nama_ayah}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="nik-ayah">NIK Ayah</label>
                                        <input type="text" class="form-control" id="nik-ayah" required name="nik_ayah" placeholder="Masukkan NIK Ayah" value={{$ortu->nik_ayah}} disabled>
                                    </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tempat-lahir-ayah">Tempat</label>
                                        <input type="text" class="form-control" id="tempat-lahir-ayah" required name="tempat_lahir_ayah" placeholder="Masukkan Tempat Lahir Ayah" value={{$ortu->tempat_lahir_ayah}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-lahir-ayah">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-ayah" required name="tanggal_lahir_ayah" placeholder="Masukkan Tanggal Lahir Ayah" value={{$ortu->tanggal_lahir_ayah}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="agama">Agama</label>
                                        <input type="text" class="form-control" id="agama" required name="agama" placeholder="Masukkan Agama Ayah" value={{$ortu->agama_ayah}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="khusus">Kebutuhan Khusus</label>
                                        <input type="text" class="form-control" id="khusus" required name="khusus" placeholder="Masukkan Kebutuhan Khusus Ayah" value={{$ortu->khusus_ayah}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="telp-ayah">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="telp-ayah" required name="telp_ayah" placeholder="Masukkan Nomor Telepon Ayah" value={{$ortu->telp_ayah}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" required name="email" placeholder="Masukkan Email Ayah" value={{$ortu->email_ayah}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="warga-negara-ayah">Warga Negara</label>
                                        <input type="text" class="form-control" id="warga-negara-ayah" required name="wn_ayah" placeholder="Masukkan Warga Negara Ayah" value={{$ortu->wn_ayah}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-ayah">Status Hidup</label>
                                        <input type="text" class="form-control" id="status-ayah" required name="status_ayah" placeholder="Masukkan Status Hidup Ayah" value={{$ortu->status_ayah}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="pendikan-terakhir-ayah">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control" id="pendikan-terakhir-ayah" required name="pendidikan_ayah" placeholder="Masukkan Pendidikan Terakhir Ayah" value={{$ortu->pendidikan_ayah}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="pendidikan-ayah">Nama Lembaga Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan-ayah" required name="pendidikan_ayah" placeholder="Masukkan Nama Lembaga Pendidikan Ayah" value={{$ortu->pendidikan_ayah}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                <div class="col-md-6 mb-2">
                                        <label for="profesi-ayah">Profesi</label>
                                        <input type="text" class="form-control" id="profesi-ayah" required name="profesi_ayah" placeholder="Masukkan Profesi Ayah" value={{$ortu->profesi_ayah}} disabled>
                                    </div>
                                    {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="status-ayah">Penghasilan per Bulan</label>
                                        <input type="text" class="form-control" id="penghasilan-ayah" required name="penghasilan_ayah" placeholder="Masukkan Penghasilan Ayah" value={{$ortu->penghasilan_ayah}} disabled>
                                    </div>
                                </div>                                            
                                    <div class="px-2 mb-2">
                                        <label for="nrp-ayah">NRP</label>
                                        <input type="text" class="form-control" id="nrp-ayah" required name="nrp_ayah" placeholder="Masukkan NRP Ayah" value={{$ortu->nrp_ayah}} disabled>
                                    </div>
                                </div>
                            

                            <!-- ibu -->
                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Ibu</h4>
                            <br><br>
                                <div class="mb-5">                                              
                                    <div class="px-2 mb-2">
                                        <label for="nama-ibu">Nama Ibu</label>
                                        <input type="text" class="form-control" id="nama-ibu" required name="nama_ibu" placeholder="Masukkan Nama Ibu" value={{$ortu->nama_ibu}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="nik-ibu">NIK Ibu</label>
                                        <input type="text" class="form-control" id="nik-ibu" required name="nik_ibu" placeholder="Masukkan NIK Ibu" value={{$ortu->nik_ibu}} disabled>
                                    </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tempat-lahir-ibu">Tempat</label>
                                        <input type="text" class="form-control" id="tempat-lahir-ibu" required name="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir Ibu" value={{$ortu->tempat_lahir_ibu}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-lahir-ibu">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-ibu" required name="tanggal_lahir_ibu" placeholder="Masukkan Tanggal Lahir Ibu" value={{$ortu->tanggal_lahir_ibu}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="agama">Agama</label>
                                        <input type="text" class="form-control" id="agama" required name="agama_ibu" placeholder="Masukkan Agama Ibu" value={{$ortu->agama_ibu}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="khusus">Kebutuhan Khusus</label>
                                        <input type="text" class="form-control" id="khusus" required name="khusus_ibu" placeholder="Masukkan Kebutuhan Khusus Ibu" value={{$ortu->khusus_ibu}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="telp-ibu">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="telp-ibu" required name="telp_ibu" placeholder="Masukkan Nomor Telepon Ibu" value={{$ortu->telp_ibu}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" required name="email_ibu" placeholder="Masukkan Email Ibu" value={{$ortu->email_ibu}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="warga-negara-ibu">Warga Negara</label>
                                        <input type="text" class="form-control" id="warga-negara-ibu" required name="wn_ibu" placeholder="Masukkan Warga Negara Ibu" value={{$ortu->wn_ibu}} disabled>
                                    </div>
                                    {{-- skip --}}
                                        <div class="col-md-6 mb-2">
                                            <label for="status-wali">Status Hidup</label>
                                            <input type="text" class="form-control" id="status-wali" required name="status_hidup_ibu" placeholder="Masukkan Status Hidup Ibu" value={{$ortu->status_hidup_ibu}} disabled>
                                    </div>
                                </div>
                                {{-- skip --}}
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="pendikan-terakhir-ibu">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control" id="pendikan-terakhir-ibu" required name="pendidikan_ibu" placeholder="Masukkan Pendidikan Terakhir Ibu" value={{$ortu->pendidikan_ibu}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="lembaga_pendidikan-ibu">Nama Lembaga Pendidikan</label>
                                        <input type="text" class="form-control" id="lembaga_pendidikan-ibu" required name="lembaga_pendidikan_ibu" placeholder="Masukkan Nama Lembaga Pendidikan Ibu" value={{$ortu->lembaga_pendidikan_ibu}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                <div class="col-md-6 mb-2">
                                        <label for="profesi-ibu">Profesi</label>
                                        <input type="text" class="form-control" id="profesi-ibu" required name="profesi_ibu" placeholder="Masukkan Profesi Ibu" value={{$ortu->profesi_ibu}} disabled>
                                    </div>
                                    {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="status-ibu">Penghasilan per Bulan</label>
                                        <input type="text" class="form-control" id="status-ibu" required name="penghasilan_ibu" placeholder="Masukkan Penghasilan per Bulan Ibu" value={{$ortu->penghasilan_ibu}} disabled>
                                    </div>
                                </div>                                            
                                    <div class="px-2 mb-2">
                                        <label for="nrp-ibu">NRP</label>
                                        <input type="text" class="form-control" id="nrp-ibu" required name="nrp_ibu" placeholder="Masukkan NRP Ibu" value={{$ortu->nrp_ibu}} disabled>
                                    </div>
                                </div>

                            <!-- wali -->
                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Wali</h4>
                            <br><br>
                                <div class="mb-4">                                              
                                    <div class="px-2 mb-2">
                                        <label for="nama-wali">Nama Wali</label>
                                        <input type="text" class="form-control" id="nama-wali" required name="nama_wali" placeholder="Masukkan Nama Wali" value={{$ortu->nama_wali}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="nik-wali">NIK Wali</label>
                                        <input type="text" class="form-control" id="nik-wali" required name="nik_wali" placeholder="Masukkan NIK Wali" value={{$ortu->nik_wali}} disabled>
                                    </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tempat-lahir-wali">Tempat</label>
                                        <input type="text" class="form-control" id="tempat-lahir-wali" required name="tempat_lahir_wali" placeholder="Masukkan Tempat Lahir Wali" value={{$ortu->tempat_lahir_wali}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-lahir-wali">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-wali" required name="tanggal_lahir_wali" placeholder="Masukkan Tanggal Lahir Wali" value={{$ortu->tanggal_lahir_wali}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="agama">Agama</label>
                                        <input type="text" class="form-control" id="agama" required name="agama_wali" placeholder="Masukkan Agama Wali" value={{$ortu->agama_wali}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="khusus">Kebutuhan Khusus</label>
                                        <input type="text" class="form-control" id="khusus" required name="khusus_wali" placeholder="Masukkan Kebutuhan Khusus Wali" value={{$ortu->khusus_wali}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="telp-wali">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="telp-wali" required name="telp_wali" placeholder="Masukkan Nomor Telepon Wali" value={{$ortu->telp_wali}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" required name="email_wali" placeholder="Masukkan Email Wali" value={{$ortu->email_wali}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="warga-negara-wali">Warga Negara</label>
                                        <input type="text" class="form-control" id="warga-negara-wali" required name="wn_wali" placeholder="Masukkan Warga Negara Wali" value={{$ortu->wn_wali}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-wali">Status Hidup</label>
                                        <input type="text" class="form-control" id="status-wali" required name="status_wali" placeholder="Masukkan Status Hidup Wali" value={{$ortu->status_wali}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="pendikan-terakhir-wali">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control" id="pendikan-terakhir-wali" required name="pendidikan_wali" placeholder="Masukkan Pendidikan Terakhir Wali" value={{$ortu->pendidikan_wali}} disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="pendidikan-wali">Nama Lembaga Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan-wali" required name="pendidikan_wali" placeholder="Masukkan Nama Lembaga Pendidikan Wali" value={{$ortu->pendidikan_wali}} disabled>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                <div class="col-md-6 mb-2">
                                        <label for="profesi-wali">Profesi</label>
                                        <input type="text" class="form-control" id="profesi-wali" required name="profesi_wali" placeholder="Masukkan Profesi Wali" value={{$ortu->profesi_wali}} disabled>
                                    </div>
                                    {{-- skip --}}
                                    <div class="col-md-6 mb-2">
                                        <label for="status-wali">Penghasilan per Bulan</label>
                                        <input type="text" class="form-control" id="penghasilan-wali" required name="penghasilan_wali" placeholder="Masukkan Penghasilan Wali" value={{$ortu->penghasilan_wali}} disabled>
                                    </div>
                                </div>                                            
                                    <div class="px-2 mb-2">
                                        <label for="nrp-wali">NRP</label>
                                        <input type="text" class="form-control" id="nrp-wali" required name="nrp_wali" placeholder="Masukkan NRP Wali" value={{$ortu->nrp_wali}} disabled>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-block" style="margin-right:10px" onClick="prevTab(5)">Prev</button>
                                    <button type="button" class="btn btn-primary btn-block" onClick="nextTab(5)">Next</button>
                                </div>
                            </div>

                        <!-- hobi -->
                        <div class="tab-pane fade" id="bordered-hobi" role="tabpanel" aria-labelledby="hobi-tab">
                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Hobi Siswa</h4>
                            <br><br>
                                <div class="mb-3">                                              
                                    <div class="px-2 mb-2">
                                        <label for="kesenian">Hobi Kesenian</label>
                                        <input type="text" class="form-control" id="kesenian" required name="kesenian" placeholder="Masukkan Hobi Kesenian" value={{$siswas->kesenian}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="olahraga">Hobi Olahraga</label>
                                        <input type="text" class="form-control" id="olahraga" required name="olahraga" placeholder="Masukkan Hobi Olahraga" value={{$siswas->olahraga}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="organisasi">Organisasi</label>
                                        <input type="text" class="form-control" id="organisasi" required name="organisasi" placeholder="Masukkan Organisasi" value={{$siswas->organisasi}} disabled>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="hobi-lain">Lainnya</label>
                                        <input type="text" class="form-control" id="hobi-lain" required name="hobi_lain" placeholder="Masukkan Hobi Lainnya" value={{$siswas->hobi_lain}} disabled>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-block" style="margin-right:10px" onClick="prevTab(6)">Prev</button>
                                    <button type="button" class="btn btn-primary btn-block" onClick="nextTab(6)">Next</button>
                                </div>
                        </div>

                        <!-- lainnya -->
                        <div class="tab-pane fade" id="bordered-lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
                        <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Lainnya : PIP</h4>
                            <br><br>
                                <div class="mb-5">
                                {{-- skip --}}
                                    <div class="row px-2 mb-3">
                                        <div class="col-md-6 ">
                                            <label for="kelayakan-pip">Kelayakan PIP</label>
                                            <input type="text" class="form-control" id="kelayakan-pip" required name="kelayakan_pip" placeholder="Masukkan Kelayakan PIP" value={{$siswas->kelayakan_pip}} disabled>
                                        </div>
                                        {{-- skip --}}
                                        <div class="col-md-6 ">
                                            <label for="alasan-pip">Alasan Layak Menerima PIP</label>
                                            <input type="text" class="form-control" id="alasan-pip" required name="alasan_pip" placeholder="Masukkan Alasan Layak Menerima PIP" value={{$siswas->alasan_pip}} disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="row px-2">
                                        <div class="col-md-6 ">
                                            <label for="kode-bank">Kode Bank</label>
                                            <input type="text" class="form-control" id="kode-bank" required name="kode_bank" placeholder="Masukkan Kode Bank" value={{$siswas->kode_bank}} disabled>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="rekening">Nomor Rekening</label>
                                            <input type="text" class="form-control" id="rekening" required name="rekening" placeholder="Masukkan Nomor Rekening" value={{$siswas->no_rekening}} disabled>
                                        </div>
                                    </div> 
                                    
                                    <div class="pt-2 px-2">
                                        <label for="rekeningan">Rekening a.n</label>
                                        <input type="text" class="form-control" id="rekeningan" required name="rekeningan" placeholder="Masukkan Rekening a.n" value={{$siswas->nama_rekening}} disabled>
                                    </div>
                                </div>

                            <h4 class="fw-bolder ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Lainnya : KPS</h4>
                            <br><br>
                                <div class="mb-5">
                                    <div class="row px-2 mb-3">
                                    {{-- skip --}}
                                        <div class="col-md-6 ">
                                            <label for="kps">Apakah Penerima KPS?</label>
                                            <input type="text" class="form-control" id="kps" required name="kps" placeholder="Masukkan Apakah Penerima KPS?" value={{$siswas->kps}} disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="no-kps">No. KPS</label>
                                            <input type="text" class="form-control" id="no-kps" required name="no_kps" placeholder="Masukkan No. KPS" value={{$siswas->no_kps}} disabled>
                                        </div>
                                    </div>
                                </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Lainnya : KKS</h4>
                            <br><br>
                                <div class="mb-5">
                                    <div class="row px-2 mb-3">
                                        <div class="col-md-6 ">
                                            <label for="kks">Apakah Penerima KKS?</label>
                                            <input type="text" class="form-control" id="kks" required name="kks" placeholder="Masukkan Apakah Penerima KKS?" value={{$siswas->kks}} disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="no-kip">No. KIP</label>
                                            <input type="text" class="form-control" id="no-kip" required name="no_kip" placeholder="Masukkan No. KIP" value={{$siswas->no_kip}} disabled>
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-3">
                                        <div class="col-md-6">
                                            <label for="nama-kip">Nama KIP</label>
                                            <input type="text" class="form-control" id="nama-kip" required name="nama_kip" placeholder="Masukkan Nama KIP" value={{$siswas->nama_kip}} disabled>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="no-kks">No. KKS</label>
                                            <input type="text" class="form-control" id="no-kks" required name="no_kks" placeholder="Masukkan No. KKS" value={{$siswas->no_kks}} disabled>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- button next prev --}}
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary btn-block" style="margin-right:10px" onClick="prevTab(7)">Prev</button>
                                </div>
                        </div>
                    </div>
                    <!-- End of Bordered Tabs -->       
                    </form>

                    </div>
                </div>

                
                </div>

                </div>

                    </div>
                </div>
</table>
</div>



@endsection