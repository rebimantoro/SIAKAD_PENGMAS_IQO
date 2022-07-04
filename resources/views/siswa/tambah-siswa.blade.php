@extends('layouts.admin')
@section('siswa')
<?php $siswa="active"?>
@endsection
@section('tambah-siswa')
active
@endsection
@section('content')

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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                                        <input type="text" class="form-control" id="nik" name="nik" required placeholder="Masukkan NIK">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="akte">No. Akte</label>
                                        <input type="text" class="form-control" id="akte" required name="akte" placeholder="Masukkan No. Akte">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="kk">No. KK</label>
                                        <input type="text" class="form-control" id="kk" name="kk" required placeholder="Masukkan No. KK">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="nisn">NISN</label>
                                        <input type="text" class="form-control" id="nisn" required name="nisn" placeholder="Masukkan NISN">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="nama-lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama-lengkap" name="nama_lengkap" required placeholder="Masukkan Nama Lengkap">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="nama-panggilan">Nama Panggilan</label>
                                        <input type="text" class="form-control" id="nama-panggilan" required name="nama_panggilan" placeholder="Masukkan Nama Panggilan">
                                    </div>
                                </div>
                                <div class="px-2 mb-3">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-select" aria-label="Pilih Jenis Kelamin">
                                    <option selected>-- Pilih Jenis Kelamin --</option>
                                    <option value="lk">Laki-Laki</option>
                                    <option value="pr">Perempuan</option>
                                    </select>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tempat-lahir">Tempat</label>
                                        <input type="text" class="form-control" id="tempat-lahir" required name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal-lahir" required name="tanggal_lahir">
                                    </div>
                                </div>
                                <div class="row px-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="agama">Agama</label>
                                        <select name="agama" class="form-select" aria-label="Pilih Agama">
                                        <option selected>-- Pilih Agama --</option>
                                        <option value="islam">Islam</option>
                                        <option value="protestan">Kristen Protestan</option>
                                        <option value="katholik">Kristen Katholik</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="warga-negara">Warga Negara</label>
                                        <select name="kewarganegaraan" class="form-select" aria-label="Pilih Warga Negara">
                                        <option selected>-- Pilih Warga Negara --</option>
                                        <option value="wni">WNI</option>
                                        <option value="wna">WNA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="pt-2 px-2 mb-2">
                                    <label for="bahasa">Bahasa Sehari-Hari</label>
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" id="bahasa" required name="bahasa">
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Hubungan Keluarga</h4>
                            <br><br>
                            <div class="mb-5">                                              
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="status-hubungan">Status Hubungan Keluarga</label>
                                        <select name="status_keluarga" class="form-select" aria-label="Pilih Status Hubungan Keluarga">
                                        <option selected>-- Pilih Status Hubungan Keluarga --</option>
                                        <option value="kandung">Anak Kandung</option>
                                        <option value="tiri">Anak Tiri</option>
                                        <option value="angkat">Anak Angkat</option>
                                        <option value="saudara">Saudara</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-anak">Status Anak</label>
                                        <select name="status_anak" class="form-select" aria-label="Pilih Status Anak">
                                        <option selected>-- Pilih Status Anak --</option>
                                        <option value="lengkap">Orang Tua Lengkap</option>
                                        <option value="yatim">Anak Yatim</option>                                        
                                        <option value="piatu">Anak Piatu</option>
                                        <option value="yatim-piatu">Anak Yatim Piatu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tinggal-bersama">Tinggal Bersama</label>
                                        <select name="tinggal_bersama" class="form-select" aria-label="Pilih Tinggal Bersama">
                                        <option selected>-- Pilih Tinggal Bersama --</option>
                                        <option value="orangtua">Orang Tua</option>
                                        <option value="wali">Wali</option>
                                        <option value="kos">Kos</option>
                                        <option value="asrama">Asrama</option>
                                        <option value="panti">Panti Asuhan</option>
                                        <option value="pesantren">Pesantren</option>
                                        <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="anak-ke">Anak Ke-</label>
                                        <input type="text" class="form-control" id="anak-ke" required name="anak_ke" placeholder="Isi Dengan Angka">
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <label for="jumlah-saudara">Jumlah Saudara</label>
                                        <input type="text" class="form-control" id="jumlah-saudara" required name="jumlah_saudara" placeholder="Isi Dengan Angka">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Status Siswa</h4>
                            <br><br>
                            <div class="mb-5">                                              
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="status-aktif">Status Aktif</label>
                                        <select name="status_aktif" class="form-select" aria-label="Pilih Status Aktif">
                                        <option selected>-- Pilih Status Aktif --</option>
                                        <option value="aktif">Aktif</option>
                                        <option value="tidak">Tidak Aktif</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-awal">Status Awal Pendaftaran</label>
                                        <select name="status_pendaftaran" class="form-select" aria-label="Pilih Status Awal Pendaftaran">
                                        <option selected>-- Pilih Status Awal Pendaftaran --</option>
                                        <option value="baru">Baru</option>
                                        <option value="pindahan">Pindahan</option>                                        
                                        <option value="kembali">Kembali Ke Sekolah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tahun-akademik">Tahun Akademik</label>
                                        <select name="tahun_akademik" class="form-select" aria-label="Pilih Tahun Akademik">
                                        <option selected>-- Pilih Tahun Akademik --</option>
                                        <option value="1">2021/2022</option>                                        
                                        <option value="2">2020/2021</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-belajar">Tanggal Mulai Belajar</label>
                                        <input type="date" class="form-control" id="tanggal-belajar" required name="tanggal_belajar">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Kelengkapan Data</h4>
                            <br><br>
                            <div class="row px-2 ">
                                <div class="col-md-6 ">
                                    <div class="row mb-3 ">
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                            <input name="nisn" class="form-check-input" type="checkbox" id="check-nisn">
                                                <label class="form-check-label" for="check-akte">
                                                    NISN
                                                </label>
                                            </div>
                                                
                                            <div class="form-check">
                                            <input name="akte" class="form-check-input" type="checkbox" id="check-akte">
                                                <label class="form-check-label" for="check-akte">
                                                    Akte Kelahiran
                                                </label>
                                            </div>

                                            <div class="form-check">
                                            <input name="kk" class="form-check-input" type="checkbox" id="check-kk">
                                                <label class="form-check-label" for="check-kk">
                                                    Kartu Keluarga
                                                </label>
                                            </div>
                                                
                                            <div class="form-check">
                                            <input name="ijazah" class="form-check-input" type="checkbox" id="check-ijazah">
                                                <label class="form-check-label" for="check-ijazah">
                                                    Ijazah
                                                </label>
                                            </div>

                                            <div class="form-check">
                                            <input name="skhun" class="form-check-input" type="checkbox" id="check-skhun">
                                                <label class="form-check-label" for="check-skhun">
                                                    SKHUN
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="level">Upload Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" required>
                                </div>
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
                                            <input type="text" class="form-control" id="blok" name="provinsi" required placeholder="Masukkan Provinsi">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="kab-kota">Kabupaten/Kota</label>
                                            <input type="text" class="form-control" id="kab-kota" required name="kab_kota" placeholder="Masukkan Kabupatne/Kota">
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required placeholder="Masukkan Kecamatan">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="desa-kel">Desa/Kelurahan</label>
                                            <input type="text" class="form-control" id="desa-kel" required name="desa_kel" placeholder="Masukkan Desa/Kelurahan">
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Masukkan Alamat">
                                        </div>
                                        <div class="col-md-1 mb-2">
                                            <label for="rt">RT</label>
                                            <input type="text" class="form-control" id="rt" required name="rt" placeholder="000">
                                        </div>
                                        <div class="col-md-1 mb-2">
                                            <label for="rw">RW</label>
                                            <input type="text" class="form-control" id="rw" required name="rw" placeholder="000">
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="kode-pos">Kode Pos</label>
                                            <input type="text" class="form-control" id="kode-pos" required name="kode_pos" placeholder="Masukkan Kode Pos">
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="no_telp">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="no_telp" name="no_telp" required placeholder="Masukkan Nomor Telepon">
                                            </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" required name="email" placeholder="Masukkan Email">
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="no_telp">Jarak Ke Sekolah</label>
                                            <input type="text" class="form-control" id="no_telp" name="jarak" required placeholder="Masukkan Jarak">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="transportasi">Moda Transportasi</label>
                                            <select name="transportasi" class="form-select" aria-label="Pilih Moda Transportasi">
                                            <option selected>-- Pilih Moda Transportasi --</option>
                                            <option value="1">Jalan Kaki</option>
                                            <option value="2">Kendaraan Pribadi</option>
                                            <option value="3">Jemputan Sekolah</option>
                                            <option value="4">Kendaraan Umum</option>
                                            <option value="5">Kereta Api</option>
                                            <option value="6">Perahu Penyebrangan</option>
                                            <option value="7">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <label for="waktu-tempuh-jam">Waktu Tempuh Ke Sekolah *) Jam Isikan Dengan 00 , Jika Hanya Dalam Hitungan Menit</label>
                                        <div class="col-md-6 mb-2">
                                            <input type="text" class="form-control" id="waktu-tempuh-jam" name="waktu_tempuh_jam" required placeholder="00 Jam">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <input type="text" class="form-control" id="waktu-tempuh-menit" required name="waktu_tempuh_menit" placeholder="00 Ment">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <!-- kesehatan -->
                        <div class="tab-pane fade" id="bordered-kesehatan" role="tabpanel" aria-labelledby="kesehatan-tab">
                        <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Kesehatan Siswa</h4>
                            <br><br>
                                <div class="mb-3">                                              
                                    <div class="px-2 mb-2">
                                        <label for="gol-darah">Golongan Darah</label>
                                        <select name="golongan_darah" class="form-select" aria-label="Pilih Golongan Darah">
                                        <option selected>-- Pilih Golongan Darah --</option>
                                        <option value="1">O+</option>
                                        <option value="2">O-</option>
                                        <option value="3">A+</option>
                                        <option value="4">A-</option>
                                        <option value="5">B+</option>
                                        <option value="6">B-</option>
                                        <option value="7">AB+</option>
                                        <option value="8">AB-</option>
                                        </select>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="penyakit-kronis">Penyakit Kronis</label>
                                        <div class="input-group">
                                            <textarea type="text" class="form-control" id="penyakit-kronis" required name="penyakit_kronis">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="kelainan">Kelainan</label>
                                        <div class="input-group">
                                            <textarea type="text" class="form-control" id="kelainan" required name="kelainan">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="px-2 mb-2">
                                        <label for="kebutuhan-khusus">Kebutuhan Khusus</label>
                                        <select name="kebutuhan_khusus" class="form-select" aria-label="Pilih Kebutuhan Khusus">
                                        <option selected>-- Pilih Kebutuhan Khusus --</option>
                                        </select>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="tb">Tinggi Badan</label>
                                            <input type="text" class="form-control" id="tb" required name="tb" placeholder="Masukkan Tinggi Badan (dalam cm)">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="bb">Berat Badan</label>
                                            <input type="text" class="form-control" id="bb" required name="bb" placeholder="Masukkan Berat Badan (dalam kg)"> 
                                        </div>
                                    </div>
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
                                            <input type="text" class="form-control" id="nama-tk" required name="nama_tk" placeholder="Masukkan Sekolah Asal"> 
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="tanggal-ijazah-tk">Tanggal Ijazah</label>
                                            <input type="date" class="form-control" id="tanggal-ijazah-tk" required name="tanggal_ijazah_tk">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="ijazah-tk">No. Ijazah</label>
                                            <input type="text" class="form-control" id="ijazah-tk" required name="ijazah_tk" placeholder="Masukkan Nomor Ijazah">
                                        </div>
                                    </div> 

                                    <div class="pt-2 px-2 mb-2">
                                        <label for="ujian-tk">No. Ujian Sebelumnya</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="ujian-tk" required name="ujian_tk" placeholder="Masukkan No. Ujian Sebelumnya"> 
                                        </div>
                                    </div>

                                    <div class="pt-2 px-2 mb-2">
                                        <label>Status Sekolah Sebelumnya</label>
                                        <div name="tk_negri" class="form-check">
                                            <input class="form-check-input" type="radio" name="tk_type" id="tk_negri1" value="tk-negri">
                                            <label class="form-check-label" for="tk_type">
                                                Negeri
                                            </label>
                                        </div>
                                        <div name="tk_swasta" class="form-check">
                                            <input class="form-check-input" type="radio" name="tk_type" id="tk_type2" value="tk-swasta">
                                            <label class="form-check-label" for="tk_type">
                                                Swasta
                                            </label>
                                        </div>
                                </div>
                                </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Jenjang SD</h4>
                            <br><br>
                            <!-- SD -->
                                <div class="mb-5">  
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="jenjang">Jenjang</label>
                                            <input type="text" class="form-control" id="jenjang" readonly name="jenjang" value="TK">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="nama-sd">Nama Sekolah Asal</label>
                                            <input type="text" class="form-control" id="nama-sd" required name="nama_sd" placeholder="Masukkan Sekolah Asal"> 
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="tanggal-ijazah-sd">Tanggal Ijazah</label>
                                            <input type="date" class="form-control" id="tanggal-ijazah-sd" required name="tanggal_ijazah_sd">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="ijazah-sd">No. Ijazah</label>
                                            <input type="text" class="form-control" id="ijazah-sd" required name="ijazah-sd" placeholder="Masukkan Nomor Ijazah">
                                        </div>
                                    </div> 

                                    <div class="pt-2 px-2 mb-2">
                                        <label for="ujian-sd">No. Ujian Sebelumnya</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="ujian-sd" required name="ujian_sd" placeholder="Masukkan No. Ujian Sebelumnya"> 
                                        </div>
                                    </div>

                                    <div class="pt-2 px-2 mb-2">
                                        <label>Status Sekolah Sebelumnya</label>
                                        <div name="sd_negri" class="form-check">
                                            <input class="form-check-input" type="radio" name="sd_type" id="sd_negri1" value="sd-negri">
                                            <label class="form-check-label" for="sd_type">
                                                Negeri
                                            </label>
                                        </div>
                                        <div name="sd_swasta" class="form-check">
                                            <input class="form-check-input" type="radio" name="sd_type" id="sd_type2" value="sd-swasta">
                                            <label class="form-check-label" for="sd_type">
                                                Swasta
                                            </label>
                                        </div>
                                </div>
                                </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Jenjang SMP</h4>
                            <br><br>
                            <!-- SMP -->
                                <div class="mb-5">  
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 mb-2">
                                            <label for="jenjang">Jenjang</label>
                                            <input type="text" class="form-control" id="jenjang" readonly name="jenjang" value="sd">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="nama-smp">Nama Sekolah Asal</label>
                                            <input type="text" class="form-control" id="nama-smp" required name="nama_smp" placeholder="Masukkan Sekolah Asal"> 
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="tanggal-ijazah-smp">Tanggal Ijazah</label>
                                            <input type="date" class="form-control" id="tanggal-ijazah-smp" required name="tanggal_ijazah_smp">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="ijazah-smp">No. Ijazah</label>
                                            <input type="text" class="form-control" id="ijazah-smp" required name="ijazah_smp" placeholder="Masukkan Nomor Ijazah">
                                        </div>
                                    </div> 

                                    <div class="pt-2 px-2 mb-2">
                                        <label for="ujian-smp">No. Ujian Sebelumnya</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="ujian-smp" required name="ujian_smp" placeholder="Masukkan No. Ujian Sebelumnya"> 
                                        </div>
                                    </div>

                                    <div class="pt-2 px-2 mb-2">
                                        <label>Status Sekolah Sebelumnya</label>
                                        <div name="smp_negri" class="form-check">
                                            <input class="form-check-input" type="radio" name="smp_type" id="smp_negri1" value="smp-negri">
                                            <label class="form-check-label" for="smp_type">
                                                Negeri
                                            </label>
                                        </div>
                                        <div name="smp_swasta" class="form-check">
                                            <input class="form-check-input" type="radio" name="smp_type" id="smp_type2" value="smp-swasta">
                                            <label class="form-check-label" for="smp_type">
                                                Swasta
                                            </label>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <!-- pindahan -->
                        <div class="tab-pane fade" id="bordered-pindahan" role="tabpanel" aria-labelledby="pindahan-tab">
                        <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Pindahan Siswa</h4>
                            <br><br>
                                <div class="mb-3">                                              
                                    <div class="px-2 mb-2">
                                        <label for="dipindah-karena">Dipindahkan karena :</label>
                                        <select name="pindahan_type" class="form-select" aria-label="Pilih Dipindahkan Karena">
                                        <option selected>-- Pilih Dipindahkan Karena --</option>
                                        <option value="1">Mutasi/Pindah Sekolah</option>
                                        <option value="2">Dikeluarkan</option>
                                        <option value="3">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="alasan-pindah">Alasan Dipindahkan</label>
                                        <div class="input-group">
                                            <textarea type="text" class="form-control" id="alasan-pindah" required name="alasan_pindah">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="no-surat-pindah">No. Surat Pindah</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="no-surat-pindah" required name="no_surat_pindah"> 
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="sekolah-asal">Nama Sekolah Asal</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="sekolah-asal" required name="sekolah_asal"> 
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="alamat-sekolah-asal">Alasan Dipindahkan</label>
                                        <div class="input-group">
                                            <textarea type="text" class="form-control" id="alasan-pindahalamat-sekolah-asal" required name="alamat_sekolah_asal">
                                            </textarea>
                                        </div>
                                    </div>
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
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nama-ayah" required name="nama_ayah" placeholder="Masukkan Nama Ayah"> 
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="nik-ayah">NIK Ayah</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nik-ayah" required name="nik_ayah" placeholder="Masukkan NIK Ayah"> 
                                        </div>
                                    </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tempat-lahir-ayah">Tempat</label>
                                        <input type="text" class="form-control" id="tempat-lahir-ayah" required name="tempat_lahir_ayah" placeholder="Masukkan Tempat Lahir Ayah">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-lahir-ayah">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-ayah" required name="tanggal_lahir_ayah">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="agama">Agama</label>
                                        <select class="form-select" aria-label="Pilih Agama">
                                        <option name="agama_ayah" selected>-- Pilih Agama --</option>
                                        <option value="islam">Islam</option>
                                        <option value="protestan">Kristen Protestan</option>
                                        <option value="katholik">Kristen Katholik</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="khusus">Kebutuhan Khusus</label>
                                        <select name="kebutuhan_khusus_ayah" class="form-select" aria-label="Pilih Berkebutuhan Khusus">
                                        <option selected>-- Pilih Berkebutuhan Khusus--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="telp-ayah">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="telp-ayah" required name="telp_ayah" placeholder="*)Wajib Memassukkan nomor telepon Aktif">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" required name="email_ayah" placeholder="Masukkan Email Ayah">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="warga-negara-ayah">Warga Negara</label>
                                        <select name="wn_ayah" class="form-select" aria-label="Pilih Warga Negara">
                                        <option selected>-- Pilih Warga Negara --</option>
                                        <option value="wni">WNI</option>
                                        <option value="wna">WNA</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-ayah">Status Hidup</label>
                                        <select name="status_hidup_ayah" class="form-select" aria-label="Pilih Status">
                                        <option selected>-- Pilih Status --</option>
                                        <option value="hidup">Hidup</option>
                                        <option value="meninggal">Meninggal Dunia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="pendikan-terakhir-ayah">Pendidikan Terakhir</label>
                                        <select name="pendidikan_ayah" class="form-select" aria-label="Pilih Pendidikan Terakhir">
                                        <option selected>-- Pilih Pendidikan Terakhir --</option>
                                        <option value="d1">D1</option>
                                        <option value="d2">D2</option>
                                        <option value="d3">D3</option>
                                        <option value="d4">D4</option>
                                        <option value="s1">s1</option>
                                        <option value="s2">s2</option>
                                        <option value="s3">S3</option>
                                        <option value="smak">SMA/SMK</option>
                                        <option value="smp">SMP</option>
                                        <option value="sd">SD</option>
                                        <option value="tk">TK</option>
                                        <option value="tidak-sekolah">Tidak Sekolah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="pendidikan-ayah">Nama Lembaga Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan-ayah" required name="lembaga_pendidikan_ayah" placeholder="Masukkan Nama Lembaga Pendidikan">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                <div class="col-md-6 mb-2">
                                        <label for="profesi-ayah">Profesi</label>
                                        <input type="text" class="form-control" id="profesi-ayah" required name="profesi_ayah" placeholder="Masukkan Profesi">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-ayah">Penghasilan per Bulan</label>
                                        <select name="penghasilan_ayah" class="form-select" aria-label="Pilih Status">
                                        <option selected>-- Pilih Status --</option>
                                        <option value="tidak">Tidak Berpenghasilan</option>
                                        <option value="1">> Rp. 500.000</option>
                                        <option value="2">Rp. 500.000 - Rp. 999.999</option>
                                        <option value="3">Rp. 1.000.000 - Rp. 1.999.999</option>
                                        <option value="4">Rp. 2.000.000 - Rp. 4.999.999</option>
                                        <option value="5">Rp. 5.000.000 - Rp. 20.000.000</option>
                                        <option value="6">< Rp. 20.000.000</option>
                                        </select>
                                    </div>
                                </div>                                            
                                    <div class="px-2 mb-2">
                                        <label for="nrp-ayah">NRP</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nrp-ayah" name="nrp_ayah" placeholder="*) Isikan Jika Staff Sekolah/Yayasan"> 
                                        </div>
                                    </div>
                                </div>
                            

                            <!-- ibu -->
                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Ibu</h4>
                            <br><br>
                                <div class="mb-5">                                              
                                    <div class="px-2 mb-2">
                                        <label for="nama-ibu">Nama Ibu</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nama-ibu" required name="nama_ibu" placeholder="Masukkan Nama ibu"> 
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="nik-ibu">NIK Ibu</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nik-ibu" required name="nik_ibu" placeholder="Masukkan NIK ibu"> 
                                        </div>
                                    </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tempat-lahir-ibu">Tempat</label>
                                        <input type="text" class="form-control" id="tempat-lahir-ibu" required name="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir ibu">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-lahir-ibu">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-ibu" required name="tanggal_lahir_ibu">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="agama">Agama</label>
                                        <select name ="agama_ibu" class="form-select" aria-label="Pilih Agama">
                                        <option selected>-- Pilih Agama --</option>
                                        <option value="islam">Islam</option>
                                        <option value="protestan">Kristen Protestan</option>
                                        <option value="katholik">Kristen Katholik</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="khusus">Kebutuhan Khusus</label>
                                        <select name="kebutuhan_khusus_ibu" class="form-select" aria-label="Pilih Berkebutuhan Khusus">
                                        <option selected>-- Pilih Berkebutuhan Khusus--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="telp-ibu">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="telp-ibu" required name="telp_ibu" placeholder="*)Wajib Memassukkan nomor telepon Aktif">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" required name="email_ibu" placeholder="Masukkan Email ibu">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="warga-negara-ibu">Warga Negara</label>
                                        <select name="wn_ibuh" class="form-select" aria-label="Pilih Warga Negara">
                                        <option selected>-- Pilih Warga Negara --</option>
                                        <option value="wni">WNI</option>
                                        <option value="wna">WNA</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-ibu">Status Hidup</label>
                                        <select class="form-select" aria-label="Pilih Status">
                                        <option selected>-- Pilih Status --</option>
                                        <option value="hidup">Hidup</option>
                                        <option value="meninggal">Meninggal Dunia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="pendikan-terakhir-ibu">Pendidikan Terakhir</label>
                                        <select name="pendikan_ibu" class="form-select" aria-label="Pilih Pendidikan Terakhir">
                                        <option selected>-- Pilih Pendidikan Terakhir --</option>
                                        <option value="d1">D1</option>
                                        <option value="d2">D2</option>
                                        <option value="d3">D3</option>
                                        <option value="d4">D4</option>
                                        <option value="s1">s1</option>
                                        <option value="s2">s2</option>
                                        <option value="s3">S3</option>
                                        <option value="smak">SMA/SMK</option>
                                        <option value="smp">SMP</option>
                                        <option value="sd">SD</option>
                                        <option value="tk">TK</option>
                                        <option value="tidak-sekolah">Tidak Sekolah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="pendidikan-ibu">Nama Lembaga Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan-ibu" required name="lembaga_pendidikan_ibu" placeholder="Masukkan Nama Lembaga Pendidikan">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                <div class="col-md-6 mb-2">
                                        <label for="profesi-ibu">Profesi</label>
                                        <input type="text" class="form-control" id="profesi-ibu" required name="profesi_ibu" placeholder="Masukkan Profesi">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-ibu">Penghasilan per Bulan</label>
                                        <select name="penghasilan_ibu" class="form-select" aria-label="Pilih Status">
                                        <option selected>-- Pilih Status --</option>
                                        <option value="tidak">Tidak Berpenghasilan</option>
                                        <option value="1">> Rp. 500.000</option>
                                        <option value="2">Rp. 500.000 - Rp. 999.999</option>
                                        <option value="3">Rp. 1.000.000 - Rp. 1.999.999</option>
                                        <option value="4">Rp. 2.000.000 - Rp. 4.999.999</option>
                                        <option value="5">Rp. 5.000.000 - Rp. 20.000.000</option>
                                        <option value="6">< Rp. 20.000.000</option>
                                        </select>
                                    </div>
                                </div>                                            
                                    <div class="px-2 mb-2">
                                        <label for="nrp-ibu">NRP</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nrp-ibu" name="nrp_ibu" placeholder="*) Isikan Jika Staff Sekolah/Yayasan"> 
                                        </div>
                                    </div>
                                </div>

                            <!-- wali -->
                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Wali</h4>
                            <br><br>
                                <div class="mb-4">                                              
                                    <div class="px-2 mb-2">
                                        <label for="nama-wali">Nama Wali</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nama-wali" required name="nama_wali" placeholder="Masukkan Nama wali"> 
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="nik-wali">NIK Wali</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nik-wali" required name="nik_wali" placeholder="Masukkan NIK wali"> 
                                        </div>
                                    </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="tempat-lahir-wali">Tempat</label>
                                        <input type="text" class="form-control" id="tempat-lahir-wali" required name="tempat_lahir_wali" placeholder="Masukkan Tempat Lahir wali">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="tanggal-lahir-wali">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-wali" required name="tanggal_lahir_wali">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="agama">Agama</label>
                                        <select name="agama_wali" class="form-select" aria-label="Pilih Agama">
                                        <option selected>-- Pilih Agama --</option>
                                        <option value="islam">Islam</option>
                                        <option value="protestan">Kristen Protestan</option>
                                        <option value="katholik">Kristen Katholik</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="khusus">Kebutuhan Khusus</label>
                                        <select name="kebutuhan_khusus_wali" class="form-select" aria-label="Pilih Berkebutuhan Khusus">
                                        <option selected>-- Pilih Berkebutuhan Khusus--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="telp-wali">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="telp-wali" required name="telp_wali" placeholder="*)Wajib Memassukkan nomor telepon Aktif">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" required name="email_wali" placeholder="Masukkan Email wali">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="warga-negara-wali">Warga Negara</label>
                                        <select name="wn_wali" class="form-select" aria-label="Pilih Warga Negara">
                                        <option selected>-- Pilih Warga Negara --</option>
                                        <option value="wni">WNI</option>
                                        <option value="wna">WNA</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-wali">Status Hidup</label>
                                        <select name="status_hidup_wali" class="form-select" aria-label="Pilih Status">
                                        <option selected>-- Pilih Status --</option>
                                        <option value="hidup">Hidup</option>
                                        <option value="meninggal">Meninggal Dunia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                    <div class="col-md-6 mb-2">
                                        <label for="pendikan-terakhir-wali">Pendidikan Terakhir</label>
                                        <select name="pendidikan_wali" class="form-select" aria-label="Pilih Pendidikan Terakhir">
                                        <option selected>-- Pilih Pendidikan Terakhir --</option>
                                        <option value="d1">D1</option>
                                        <option value="d2">D2</option>
                                        <option value="d3">D3</option>
                                        <option value="d4">D4</option>
                                        <option value="s1">s1</option>
                                        <option value="s2">s2</option>
                                        <option value="s3">S3</option>
                                        <option value="smak">SMA/SMK</option>
                                        <option value="smp">SMP</option>
                                        <option value="sd">SD</option>
                                        <option value="tk">TK</option>
                                        <option value="tidak-sekolah">Tidak Sekolah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="pendidikan-wali">Nama Lembaga Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan-wali" required name="lembaga_pendidikan_wali" placeholder="Masukkan Nama Lembaga Pendidikan">
                                    </div>
                                </div>
                                <div class="row px-2 mb-2">
                                <div class="col-md-6 mb-2">
                                        <label for="profesi-wali">Profesi</label>
                                        <input type="text" class="form-control" id="profesi-wali" required name="profesi_wali" placeholder="Masukkan Profesi">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="status-wali">Penghasilan per Bulan</label>
                                        <select name="penghasilan_wali" class="form-select" aria-label="Pilih Status">
                                        <option selected>-- Pilih Status --</option>
                                        <option value="tidak">Tidak Berpenghasilan</option>
                                        <option value="1">> Rp. 500.000</option>
                                        <option value="2">Rp. 500.000 - Rp. 999.999</option>
                                        <option value="3">Rp. 1.000.000 - Rp. 1.999.999</option>
                                        <option value="4">Rp. 2.000.000 - Rp. 4.999.999</option>
                                        <option value="5">Rp. 5.000.000 - Rp. 20.000.000</option>
                                        <option value="6">< Rp. 20.000.000</option>
                                        </select>
                                    </div>
                                </div>                                            
                                    <div class="px-2 mb-2">
                                        <label for="nrp-wali">NRP</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nrp-wali" name="nrp_wali" placeholder="*) Isikan Jika Staff Sekolah/Yayasan"> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- hobi -->
                        <div class="tab-pane fade" id="bordered-hobi" role="tabpanel" aria-labelledby="hobi-tab">
                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Hobi Siswa</h4>
                            <br><br>
                                <div class="mb-3">                                              
                                    <div class="px-2 mb-2">
                                        <label for="kesenian">Hobi Kesenian</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="kesenian" required name="kesenian" placeholder="Masukkan Hobi Kesenian"> 
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="olahraga">Hobi Olahraga</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="olahraga" required name="olahraga" placeholder="Masukkan Hobi Olahraga"> 
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="organisasi">Organisasi</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="organisasi" required name="organisasi"placeholder="Masukkan Organisasi"> 
                                        </div>
                                    </div>
                                    <div class="pt-2 px-2 mb-2">
                                        <label for="hobi-lain">Lainnya</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="hobi-lain" required name="hobi_lain" placeholder="Masukkan Hobi Lainnya"> 
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <!-- lainnya -->
                        <div class="tab-pane fade" id="bordered-lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
                        <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Lainnya : PIP</h4>
                            <br><br>
                                <div class="mb-5">
                                    <div class="row px-2 mb-3">
                                        <div class="col-md-6 ">
                                            <label for="kelayakan-pip">Kelayakan PIP</label>
                                            <select name="kelayakan_pip" class="form-select" aria-label="Pilih Kelayakan PIP">
                                            <option selected>-- Pilih Kelayakan PIP --</option>
                                            <option value="tidak">Tidak</option>
                                            <option value="ya">Ya</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="alasan-pip">Alasan Layak Menerima PIP</label>
                                            <select name="alasan_pip" class="form-select" aria-label="Pilih Alasan Kelayakan PIP">
                                            <option selected>-- Pilih Alasan Kelayakan PIP --</option>
                                            <option value="1">Penerima PKH/KSP/KIP</option>
                                            <option value="2">Penerima BSM 2014</option>
                                            <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosial</option>
                                            <option value="4">Pernah Drop Out</option>
                                            <option value="5">Siswa Miskin/Rentan Miskin</option>
                                            <option value="6">Keluarga Terpidana</option>
                                            <option value="7">Kelainan Fisik</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row px-2">
                                        <div class="col-md-6 ">
                                            <label for="kode-bank">Kode Bank</label>
                                            <input type="text" class="form-control" id="kode-bank" required name="kode_bank" placeholder="*) Untuk Penerima PIP">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="rekening">Nomor Rekening</label>
                                            <input type="text" class="form-control" id="rekening" required name="no_rekening" placeholder="*) Untuk Penerima PIP">
                                        </div>
                                    </div> 
                                    
                                    <div class="pt-2 px-2">
                                        <label for="rekeningan">Rekening a.n</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="rekeningan" required name="nama_rekening" placeholder="*) Untuk Penerima PIP" >
                                        </div>
                                    </div>
                                </div>

                            <h4 class="fw-bolder ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Lainnya : KPS</h4>
                            <br><br>
                                <div class="mb-5">
                                    <div class="row px-2 mb-3">
                                        <div class="col-md-6 ">
                                            <label for="kps">Apakah Penerima KPS?</label>
                                            <select name="kps" class="form-select" aria-label="Penerima KPS">
                                            <option selected>-- Penerima KPS? --</option>
                                            <option value="tidak">Tidak</option>
                                            <option value="ya">Ya</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="no-kps">No. KPS</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="no-kps" required name="no_kps" placeholder="*) Jika Ya Isi No. KPS (Kartu Perlindungan Sosial)" >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Data Lainnya : KKS</h4>
                            <br><br>
                                <div class="mb-5">
                                    <div class="row px-2 mb-3">
                                        <div class="col-md-6 ">
                                            <label for="kks">Apakah Penerima KKS?</label>
                                            <select name="kks" class="form-select" aria-label="Penerima KKS">
                                            <option selected>-- Penerima KKS? --</option>
                                            <option value="tidak">Tidak</option>
                                            <option value="ya">Ya</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="no-kip">No. KIP</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="no-kip" required name="no_kip" placeholder="*) Jika Ya Isi No. KIP (Kartu Indonesia Pintar)" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-3">
                                        <div class="col-md-6">
                                            <label for="nama-kip">Nama KIP</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nama-kip" required name="nama_kip" placeholder="*) Jika Ya Isi Nama Penerima KIP" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="no-kks">No. KKS</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="no-kks" required name="no_kks" placeholder="*) Jika Memiliki KKS (Kartu Keluarga Sejahtera)" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3" style="float:right;">
                                    <button href="" class="btn btn-delete rounded-pill ms-2">Cancel</button>
                                    <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
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