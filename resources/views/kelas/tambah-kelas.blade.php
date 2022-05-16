@extends('layouts.admin')
@section('kelas')
<?php $kelas="active"?>
@endsection
@section('tambah-kelas')
active
@endsection
@section('content')

<div class="pagetitle">
    <h1>Data Kelas</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Kelas</li>
            <li class="breadcrumb-item active">Tambah Data Kelas</li>
        </ol>
    </nav>
</div>

<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Tambah Data Kelas</h1>

                    </div>
                <div class="card-body">

                    <div class="tab-content pt-2" id="borderedTabContent">
                        <div >
                        <form>
                        <div class="row px-2 mb-3">
                            
                                <div class="col-md-6 ">
                                    <label for="grade">Tingkat / Grade Kelas</label>
                                    <select class="form-select" aria-label="Pilih Kelas">
                                    <option selected>-- Pilih Tingkat/Grade Kelas --</option>
                                    <option value="x">X</option>
                                    <option value="xi">XI</option>
                                    <option value="xii">XII</option>
                                    </select>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="kurikulum">Kurikulum</label>
                                    <select class="form-select" aria-label="Pilih Kurikulum">
                                    <option selected>-- Pilih Kurikulum --</option>
                                    <option value="k13">K13</option>
                                    <option value="ktsp">KTSP</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row px-2 mb-3">
                                <div class="col-md-6 ">
                                    <label for="studi">Program Studi</label>
                                    <select class="form-select" aria-label="Pilih Program Studi">
                                    <option selected>-- Pilih Program Studi --</option>
                                    <option value="akt">AKT</option>
                                    <option value="tkj">TKJ</option>
                                    <option value="pspt">PSPT</option>
                                    </select>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="tahun-pelajaran">Tahun Pelajaran</label>
                                    <select class="form-select" aria-label="Pilih Tahun Pelajaran">
                                    <option selected>-- Pilih Tahun Pelajaran --</option>
                                    <option value="21/22">2021/2022</option>
                                    <option value="20/21">2020/2021</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row px-2 mb-3">
                                <div class="col-md-12 ">
                                    <label for="walikelas">Program Wali Kelas</label>
                                    <select class="form-select" aria-label="Pilih Wali Kelas">
                                    <option selected>-- Pilih Wali Kelas --</option>
                                    <option value="adin">0059 - Adin</option>
                                    <option value="abdullah">0057 - Abdullah Musa, S.Pd</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row px-2 mb-3">
                                <div class="col-md-6 ">
                                    <label for="musyrifah1">Musyrifah 1</label>
                                    <input type="text" class="form-control" id="musyrifah1" name="musyrifah1" placeholder="Kosongkan Jika Tidak Ada">
                                </div>
                                <div class="col-md-6 ">
                                    <label for="musyrifah2">Musyrifah 2</label>
                                    <input type="text" class="form-control"  id="musyrifah2" name="musyrifah2" placeholder="Kosongkan Jika Tidak Ada">
                                </div>
                            </div>



                            <div class="row px-2 mb-3">
                                <div class="col-md-6 ">
                                    <label for="nama-kelas">Nama Kelas *)XI TKJ 1</label>
                                    <input type="text" class="form-control" id="nama-kelas" required name="nama-kelas" placeholder="Masukkan Nama Kelas">
                                </div>
                                <div class="col-md-6 ">
                                    <label for="nama-lain">Nama Lain Kelas *)Umar Bin Khottob</label>
                                    <input type="text" class="form-control" id="nama-lain" required name="nama-lain" placeholder="Masukkan Nama Lain Kelas">
                                </div>
                            </div>

                            
                            <div class="row px-2 mb-3">
                                <div class="col-md-6 ">
                                    <label for="kapasitas">Kapasitas Siswa Per Kelas</label>
                                    <input type="text" class="form-control" id="kapasitas" required name="kapasitas" placeholder="Masukkan Kapasitas Kelas">
                                </div>
                            </div>

                            <div class="mb-3" style="float:right;">
                                <button href="/kelas/data-kelas" class="btn btn-delete rounded-pill ms-2">Cancel</button>
                                <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
                            </div>
                        </form>


                    </div>
                </div>
</table>
</div>



@endsection