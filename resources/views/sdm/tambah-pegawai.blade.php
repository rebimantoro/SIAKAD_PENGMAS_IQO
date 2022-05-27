@extends('layouts.admin')
@section('sdm')
    <?php $sdm = 'active'; ?>
@endsection
@section('tambah-pegawai')
    active
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Data Pegawai</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">SDM</li>
                <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
        </nav>
    </div>
    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    
    @if ($errors->any())
    <div class="alert alert-danger border-left-danger" role="alert">
        <ul class="pl-4 my-2">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('tambah-pegawai') }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <!-- tabel -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pt-3">
                            <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Input Data
                                Pegawai</h1>

                        </div>
                        <div class="card-body">

                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pegawai-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-pegawai" type="button" role="tab" aria-controls="pegawai"
                                        aria-selected="true">Data Pegawai</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="kk-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-kk" type="button" role="tab" aria-controls="kk"
                                        aria-selected="false">Kartu Keluarga</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pendidikan-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-pendidikan" type="button" role="tab"
                                        aria-controls="pendidikan" aria-selected="false">Riwayat Pendidikan</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pengalaman-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-pengalaman" type="button" role="tab"
                                        aria-controls="pengalaman" aria-selected="false">Pengalaman Bekerja</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="borderedTabContent">
                                <!-- data pegawai -->
                                <div class="tab-pane fade show active" id="bordered-pegawai" role="tabpanel"
                                    aria-labelledby="pegawai-tab">
                                    <!-- informasi sekolah -->
                                    <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">
                                        Informasi Sekolah</h4>
                                    <br><br>
                                    <div class="row px-2 mb-5">
                                        <div class="col-md-6 ">
                                            <label for="nik-sekolah">NIK Sekolah</label>
                                            <input type="text" class="form-control" id="nik-sekolah" readonly
                                                name="nik-sekolah" value="220713">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="nik-dt">NIK DT</label>
                                            <input type="text" class="form-control" id="nik-dt"  name="nik-dt"
                                                placeholder="Masukkan NIK DT">
                                        </div>
                                    </div>

                                    <!-- informasi pegawai -->
                                    <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">
                                        Informasi Pegawai</h4>
                                    <br><br>
                                    <div class="row px-2 ">
                                        <div class="col-md-6 ">
                                            <label for="nuptk">NUPTK</label>
                                            <input type="text" class="form-control" id="nuptk"  name="nuptk"
                                                placeholder="Masukkan NUPTK">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="ktp">No. KTP</label>
                                            <input type="text" class="form-control" id="ktp"  name="ktp"
                                                placeholder="Masukkan Nomor KTP">
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <label for="nama-pegawai">Nama</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nama-pegawai" 
                                                name="nama-pegawai" placeholder="Masukkan Nama Pegawai">
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="tempat-lahir">Tempat</label>
                                            <input type="text" class="form-control" id="tempat-lahir" 
                                                name="tempat-lahir" placeholder="Masukkan Tempat Lahir">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="tanggal-lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal-lahir" 
                                                name="tanggal-lahir">
                                        </div>
                                    </div>

                                    <div class="row px-2">
                                        <div class="col-md-6 ">
                                            <label for="jenis-kelamin">Jenis Kelamin</label>
                                            <select name="jenis-kelamin" class="form-select" aria-label="Pilih Jenis Kelamin">
                                                <option selected>-- Pilih Jenis Kelamin --</option>
                                                <option value="lk">Laki-Laki</option>
                                                <option value="pr">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="gol-darah">Golongan Darah</label>
                                            <select name="gol-darah" class="form-select" aria-label="Pilih Golongan Darah">
                                                <option selected>-- Pilih Golongan Darah --</option>
                                                <option value="a">A</option>
                                                <option value="b">B</option>
                                                <option value="ab">AB</option>
                                                <option value="o">O</option>
                                                <option value="-">-</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat"  name="alamat"
                                                placeholder="Masukkan Alamat">
                                            <div class="invalid-feedback">
                                                Alamat Wajib Diisi
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="provinsi">Provinsi</label>
                                            <input type="text" class="form-control" id="provinsi"  name="provinsi"
                                                placeholder="Masukkan Provinsi">
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-4 ">
                                            <label for="kabupaten">Kabupaten</label>
                                            <input type="text" class="form-control" id="kabupaten" 
                                                name="kabupaten" placeholder="Masukkan Kabupaten">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" class="form-control" id="kecamatan" 
                                                name="kecamatan" placeholder="Masukkan Kecamatan">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="desa-kelurahan">Desa/Kelurahan</label>
                                            <input type="text" class="form-control" id="desa-kelurahan" 
                                                name="desa-kelurahan" placeholder="Masukkan Desa/Kelurahan">
                                        </div>
                                    </div>

                                    <div class="row px-2">
                                        <div class="col-md-6 ">
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
                                        <div class="col-md-6">
                                            <label for="status-pernikahan">Status Pernikahan</label>
                                            <select name="status-pernikahan" class="form-select" aria-label="Pilih Status Pernikahan">
                                                <option selected>-- Pilih Status Pernikahan --</option>
                                                <option value="belum-menikah">Belum Menikah</option>
                                                <option value="menikah">Menikah</option>
                                                <option value="cerai-mati">Cerai Mati</option>
                                                <option value="cerai-hidup">Cerai Hidup</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <label for="warga-negara">Warga Negara</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="warga-negara" 
                                                name="warga-negara" placeholder="Masukkan Warga Negara">
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-5">
                                        <div class="col-md-6 ">
                                            <label for="no_telp1">Nomor Telepon 1</label>
                                            <input type="text" class="form-control" id="no_telp1"  name="no_hp1"
                                                placeholder="Masukkan Nomor Telepon 1">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="no_telp2">Nomor Telepon 2</label>
                                            <input type="text" class="form-control" id="no_telp2"  name="no_hp2"
                                                placeholder="Masukkan Nomor Telepon 2">
                                        </div>

                                    </div>


                                    <!-- informasi pekerjaan -->
                                    <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">
                                        Informasi Pekerjaan</h4>
                                    <br><br>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="masuk">Tanggal Masuk</label>
                                            <input type="date" class="form-control" id="masuk"  name="masuk">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="status-aktif">Status Aktif</label>
                                            <select name="status_aktif" class="form-select" aria-label="Pilih Status Aktif">
                                                <option selected>-- Pilih Status Aktif --</option>
                                                <option value="aktif">Aktif</option>
                                                <option value="tidak-aktif">Tidak AKtif</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="kontrak">Kontrak Kerja</label>
                                            <select class="form-select" aria-label="Pilih Kontrak Kerja">
                                                <option selected>-- Pilih Kontrak Kerja --</option>
                                                <option value="yayasan">Kontrak Yayasan</option>
                                                <option value="training">Training</option>
                                                <option value="tetap">Tetap</option>
                                                <option value="percobaan">Percobaan</option>
                                                <option value="honorer">Honorer</option>
                                                <option value="pengabdian">Pengabdian</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bagian">Bagian</label>
                                            <select class="form-select" aria-label="Pilih Bagian">
                                                <option selected>-- Pilih Bagian --</option>
                                                <option value="humas">Humas</option>
                                                <option value="kesiswaa">Kesiswaan</option>
                                                <option value="kurikulum">Kurikulum</option>
                                                <option value="manajemen">Manajemen</option>
                                                <option value="pengasuhan">Pengasuhan</option>
                                                <option value="sarana">Sarana</option>
                                                <option value="tahfidz">Tahfidz</option>
                                                <option value="tu">Tata Usaha</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="jabatan-utama">Jabatan Utama</label>
                                            <input type="text" class="form-control" id="jabatan-utama"
                                                placeholder="Masukkan Jabatan Utama"  name="jabatan-utama">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="jabatan-kedua">Jabatan Kedua</label>
                                            <input type="text" class="form-control" id="jabatan-kedua"
                                                placeholder="Masukkan Jabatan Kedua"  name="jabatan-kedua">
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-5">
                                        <div class="col-md-6 ">
                                            <label for="level">Level User</label>
                                            <input type="text" class="form-control" id="level"
                                                placeholder="Masukkan Level User"  name="level">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="status-aktif">Status Aktif</label>
                                            <select class="form-select" aria-label="Pilih Status Aktif">
                                                <option selected>-- Pilih Status Aktif --</option>
                                                <option value="ia">I/a (Juru Muda)</option>
                                                <option value="ib">I/b (Juru Muda Tingkat 1)</option>
                                                <option value="ic">I/c (Juru)</option>
                                                <option value="id">I/d (Juru Tingkat 1)</option>
                                                <option value="iia">II/a (Pengatur Muda)</option>
                                                <option value="iib">II/b (Pengatur Muda Tingkat 1)</option>
                                                <option value="iic">II/c (Pengatur)</option>
                                                <option value="iid">II/d (Pengatura Tingkat 1)</option>
                                                <option value="iiia">III/a (Penata)</option>
                                                <option value="iiib">III/b (Penata Muda Tingkat 1)</option>
                                                <option value="iiic">III/c (Penata)</option>
                                                <option value="iiid">III/d (Penata Tingkat 1)</option>
                                                <option value="iva">IV/a (Pembina)</option>
                                                <option value="ivb">IV/b (Pembina Tingkat 1)</option>
                                                <option value="ivc">IV/c (Pembina Utama Muda)</option>
                                                <option value="ivd">IV/d (Pembina Utama Madya)</option>
                                                <option value="ive">IV/e (Pembina Utama)</option>
                                            </select>
                                        </div>
                                    </div>


                                    <!-- informasi pegawai -->
                                    <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">
                                        Informasi Pegawai</h4>
                                    <br><br>
                                    <div class="row px-2 ">
                                        <div class="col-md-6 ">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="emailnuptk"  name="email"
                                                placeholder="Masukkan Email">
                                            <div class="row mb-3 mt-3">
                                                <div class="col-sm-10">
                                                    <label><strong>Kelengkapan</strong></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check-ktp">
                                                        <label class="form-check-label" for="check-ktp">
                                                            KTP
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check-kk">
                                                        <label class="form-check-label" for="check-kk">
                                                            KK
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check-ijazah">
                                                        <label class="form-check-label" for="check-ijazah">
                                                            Ijazah
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check-skck">
                                                        <label class="form-check-label" for="check-skck">
                                                            SKCK
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check-skd">
                                                        <label class="form-check-label" for="check-skd">
                                                            Surat Keterangan Dokter
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check-srk">
                                                        <label class="form-check-label" for="check-srk">
                                                            Surat Rekomendasi Kerja
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check-sr">
                                                        <label class="form-check-label" for="check-sr">
                                                            Sertifikay Keahlian
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check-kuning">
                                                        <label class="form-check-label" for="check-kuning">
                                                            Kartu Kuning
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="check-npwp">
                                                        <label class="form-check-label" for="check-npwp">
                                                            NPWP
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="level">Upload Foto</label>
                                            <input name="foto" type="file" class="form-control" id="foto" >
                                        </div>

                                    </div>


                                </div>
                                <div class="tab-pane fade" id="bordered-kk" role="tabpanel" aria-labelledby="kk-tab">
                                    <!-- informasi kartu keluarga -->
                                    <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">
                                        Informasi Kartu Keluarga</h4>
                                    <br><br>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6">
                                            <label for="nik">NIK</label>
                                            <input type="number" class="form-control" id="nik" name="nik" 
                                                placeholder="Masukkan No NIK">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="jumlah-anggota-keluarga">Jumlah Anggota Keluarga</label>
                                            <input type="text" class="form-control" id="jumlah-anggota-keluarga" 
                                                name="jumlah-anggota-keluarga"
                                                placeholder="Masukkan Jumlah Anggota Keluarga">
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="blok" name="blok" 
                                                placeholder="Masukkan blok/jalan">
                                        </div>
                                        <div class="col-md-3 ">
                                            <label for="rt">RT</label>
                                            <input type="text" class="form-control" id="rw"  name="rt"
                                                placeholder="Masukkan RT">
                                        </div>
                                        <div class="col-md-3 ">

                                            <label for="rw">RW</label>
                                            <input type="text" class="form-control" id="rw"  name="rw"
                                                placeholder="Masukkan RW">
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">
                                        <div class="col-md-4 ">
                                            <label for="desa-kelurahan">Desa/Kelurahan</label>
                                            <input type="text" class="form-control" id="desa-kelurahan" 
                                                name="desa-kelurahan" placeholder="Masukkan Desa/Kelurahan">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" class="form-control" id="kecamatan" 
                                                name="kecamatan" placeholder="Masukkan Kecamatan">
                                        </div>
                                        <div class="col-md-4 ">
                                            <label for="kabupaten">Kabupaten/Kota</label>
                                            <input type="text" class="form-control" id="kabupaten" 
                                                name="kabupaten_kota" placeholder="Masukkan Kabupaten">
                                        </div>
                                    </div>
                                    <div class="row px-2 mb-2">
                                        <div class="col-md-6 ">
                                            <label for="provinsi">Provinsi</label>
                                            <input type="text" class="form-control" id="blok" name="provinsi" 
                                                placeholder="Masukkan Provinsi">
                                        </div>
                                        <div class="col-md-6 ">
                                            <label for="kodepos">Kode Pos</label>
                                            <input type="text" class="form-control" id="kodepos"  name="kodepos"
                                                placeholder="Masukkan Kode Pos">
                                        </div>
                                    </div>

                                    <div class="row px-2 mb-2">

                                    </div>

                                </div>




                                <div class="tab-pane fade" id="bordered-pendidikan" role="tabpanel"
                                    aria-labelledby="pendidikan-tab">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead style="color:#A3AED0;font-size:14px;">
                                                <tr>

                                                    <th scope="col">No</th>
                                                    <th scope="col">Jenjang</th>
                                                    <th scope="col">Nama Sekolah</th>
                                                    <th scope="col">Kota</th>
                                                    <th scope="col">Tahun Lulus</th>
                                                    <th scope="col">Fakultas</th>
                                                    <th scope="col">Jurusan</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>SD</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-sd"
                                                            name="nama-sd">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-sd"
                                                            name="kota-sd">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-sd"
                                                            name="tahunlulus-sd">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-sd"
                                                            name="fakultas-sd">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-sd"
                                                            name="jurusan-sd">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>SMP</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-smp"
                                                            name="nama-smp">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-smp"
                                                            name="kota-smp">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-smp"
                                                            name="tahunlulus-smp">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-smp"
                                                            name="fakultas-smp">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-smp"
                                                            name="jurusan-smp">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>SMA/SMK</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-smasmk"
                                                            name="nama-smasmk">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-smasmk"
                                                            name="kota-smasmk">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-smasmk"
                                                            name="tahunlulus-smasmk">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-smasmk"
                                                            name="fakultas-smasmk">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-smasmk"
                                                            name="jurusan-smasmk">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>D1</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-d1"
                                                            name="nama-d1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-d1"
                                                            name="kota-d1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-d1"
                                                            name="tahunlulus-d1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-d1"
                                                            name="fakultas-d1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-d1"
                                                            name="jurusan-d1">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>D2</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-d2"
                                                            name="nama-d2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-d2"
                                                            name="kota-d2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-d2"
                                                            name="tahunlulus-d2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-d2"
                                                            name="fakultas-d2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-d2"
                                                            name="jurusan-d2">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td>D3</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-d3"
                                                            name="nama-d3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-d3"
                                                            name="kota-d3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-d3"
                                                            name="tahunlulus-d3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-d3"
                                                            name="fakultas-d3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-d3"
                                                            name="jurusan-d3">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td>D4</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-d4"
                                                            name="nama-d4">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-d4"
                                                            name="kota-d4">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-d4"
                                                            name="tahunlulus-d4">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-d4"
                                                            name="fakultas-d4">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-d4"
                                                            name="jurusan-d4">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>8</td>
                                                    <td>S1</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-s1"
                                                            name="nama-s1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-s1"
                                                            name="kota-s1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-s1"
                                                            name="tahunlulus-s1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-s1"
                                                            name="fakultas-s1">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-s1"
                                                            name="jurusan-s1">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>9</td>
                                                    <td>S2</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-s2"
                                                            name="nama-s2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-s2"
                                                            name="kota-s2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-s2"
                                                            name="tahunlulus-s2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-s2"
                                                            name="fakultas-s2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-s2"
                                                            name="jurusan-s2">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>10</td>
                                                    <td>S3</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="nama-s3"
                                                            name="nama-s3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="kota-s3"
                                                            name="kota-s3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tahunlulus-s3"
                                                            name="tahunlulus-s3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="fakultas-s3"
                                                            name="fakultas-s3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="jurusan-s3"
                                                            name="jurusan-s3">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bordered-pengalaman" role="tabpanel"
                                    aria-labelledby="pengalaman-tab">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead style="color:#A3AED0;font-size:14px;">
                                                <tr>

                                                    <th scope="col">No</th>
                                                    <th scope="col">Periode</th>
                                                    <th scope="col">Tempat</th>
                                                    <th scope="col">Posisi</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="periode1"
                                                            name="periode">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tempat1"
                                                            name="tempat">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="posisi1"
                                                            name="posisi">
                                                    </td>
                                                </tr>

                                                {{-- <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="periode2"
                                                            name="periode2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tempat2"
                                                            name="tempat2">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="posisi2"
                                                            name="posisi2">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="periode3"
                                                            name="periode3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tempat3"
                                                            name="tempat3">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="posisi3"
                                                            name="posisi3">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="periode4"
                                                            name="periode4">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tempat4"
                                                            name="tempat4">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="posisi4"
                                                            name="posisi4">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <input type="text" class="form-control" id="periode5"
                                                            name="periode5">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="tempat5"
                                                            name="tempat5">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="posisi5"
                                                            name="posisi5">
                                                    </td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                        <div class="mb-3" style="float:right;">
                                            <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
    </form>
@endsection
