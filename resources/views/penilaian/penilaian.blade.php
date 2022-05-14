@extends('layouts.admin')

@section('content')

<div class="pagetitle">
    <h1>Penilaian</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Penilaian Siswa</li>
        </ol>
    </nav>
</div>

<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Download Master Pengisian Nilai Akhir (Untuk Ke Raport)</h1>

                    </div>
                <div class="card-body">
                    <div class="pt-3">
                        <ol>
                            <li>Download Blanko Format Nilai Akhir (Pilih Kelas kemudian Klik Tombol "Download" Untuk Mendownload Blanko) ,</li>
                            <li>Edit dan Isi Blanko Sesuai Dengan Contoh Yang Telah di Berikan, </li>
                            <li>Save As kembali Blanko Yang Sudah Diisi dengan format Save Type Excel Workbook atau Excel 97-2003 Workbook serta nama file tidak boleh menggunakan karakter seperti titik (.), koma (,), double spasi, dsb,</li>
                            <li>Pilih Tahun Akademik,</li>
                            <li>Pilih Mata Pelajaran,</li>
                            <li>Pilih File Yang Sudah di Edit sebelumnya ,</li>
                            <li>Kemudian Klik Upload, Untuk mengupload File.</li>
                        </ol>
                    </div>
                    <div class="row px-2 mb-3">
                        <div class="col-md-3 px-3 pt-2">
                            <select class="form-select" aria-label="Pilih Kelas">
                            <option selected>-- Pilih Kelas --</option>
                            <option value="1">10 A TKJ</option>
                            <option value="2">11 B TKJ</option>
                            <option value="3">12 Akuntansi</option>
                            </select>
                        </div>

                        <div class="col-md-3 px-3 pt-2">
                            <button type="submit" class="btn btn-submit rounded-pill ms-2">Download</button>
                        </div>
                        

</div>
</div>
</div>

<!-- UPLOAD NILAI -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Upload Nilai</h1>

                    </div>
                <div class="card-body">

                    <div class="tab-content pt-2" id="borderedTabContent">
                        <div >
                        <form>

                            <div class="row px-2 mb-3">
                                <div class="col-md-6">
                                    <label for="kelompok">Tahun Akademik</label>
                                    <select class="form-select" aria-label="Pilih Tahun Akademik">
                                    <option selected>-- Pilih Tahun Akademik --</option>
                                    <option value="1">2021/2022</option>
                                    <option value="2">2020/2021</option>                
                                    </select>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="tanggal-upload">Tanggal Upload</label>
                                    <input type="date" class="form-control" id="tanggal-upload" required name="tanggal-upload">
                                </div>
                            </div>

                            <div class="row px-2 mb-3">
                                <div class="col-md-6">
                                    <label for="kelompok">Kategori Ujian</label>
                                    <select class="form-select" aria-label="Pilih Kategori Ujian">
                                    <option selected>-- Pilih Kategori Ujian --</option>
                                    <option value="pts">Penilaian Tengah Semester</option>
                                    <option value="pas">Penilaian Akhir Semester</option>
                                    <option value="pak">Penilaian Akhir Tahun</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="kelompok">Tahun Akademik</label>
                                    <select class="form-select" aria-label="Pilih Periode">
                                    <option selected>-- Pilih Periode --</option>
                                    <option value="sem1">Semester 1</option>
                                    <option value="sem2">Semester 2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row px-2 mb-3">
                                <div class="col-md-6 ">
                                    <label for="level">Upload Data Nilai</label>
                                    <input type="file" class="form-control" id="foto" required>
                                </div>
                            </div>



                            <div class="mb-3" style="float:right;">
                                <button href="" class="btn btn-delete rounded-pill ms-2">Cancel</button>
                                <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
                            </div>
                        </form>


                    </div>
                </div>

</div>


@endsection