@extends('layouts.admin')
@section('raport')
<?php $raport="active"?>
@endsection
@section('data-raport')
active
@endsection
@section('content')

<div class="pagetitle">
    <h1>Data Raport</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Raport</li>
            <li class="breadcrumb-item active">Verifikasi Raport</li>
        </ol>
    </nav>
</div>

<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Verifikasi Raport</h1>

                    </div>

                <div class="card-body">
                    
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="raport-tab" data-bs-toggle="tab" data-bs-target="#bordered-raport" type="button" role="tab" aria-controls="raport" aria-selected="true">Raport</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#bordered-deskripsi" type="button" role="tab" aria-controls="deskripsi" aria-selected="false">Deskripsi</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="borderedTabContent">
                        <div class="tab-pane fade show active" id="bordered-raport" role="tabpanel" aria-labelledby="raport-tab">                    
                            <div class="table-responsive">
                                <table class="table" >
                                    <thead style="color:#A3AED0;font-size:14px;">
                                    <tr>
                                        
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Mapel</th>
                                        <th scope="col">Pengetahuan</th>
                                        <th scope="col">Keterampilan</th>
                                        <th scope="col">Sikap</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td colspan="2"><strong>A. MUATAN NASIONAL</strong></td>
                                    </tr>                                    
                                    <tbody>
                                    <tr>
                                        <td >1</td>
                                        <td >Pendidikan Agama dan Budi Pekerti (Tauhid) </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >2</td>
                                        <td >Pendidikan Agama dan Budi Pekerti (Materi Ke-DT-an)  </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >3</td>
                                        <td >Bahasa Arab</td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    </tbody>

                                    <tr>
                                        <td colspan="2"><strong>B. MUATAN KEWILAYAHAN</strong></td>
                                    </tr>                                    
                                    <tbody>
                                    <tr>
                                        <td >4</td>
                                        <td >Seni Budaya dan Keterampilan </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >5</td>
                                        <td >Bahasa Sunda  </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >6</td>
                                        <td >Seni Budaya</td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    </tbody>

                                    <tr>
                                        <td colspan="2"><strong>C1. DASAR BIDANG KEAHLIAN</strong></td>
                                    </tr>                                    
                                    <tbody>
                                    <tr>
                                        <td >7</td>
                                        <td >Desain dan Multimedia  </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >8</td>
                                        <td >Fisika  </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >9</td>
                                        <td >Simulasi dan Komunikasi Digital</td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    </tbody>

                                    <tr>
                                        <td colspan="2"><strong>C2. DASAR PROGRAM KEAHLIAN</strong></td>
                                    </tr>                                    
                                    <tbody>
                                    <tr>
                                        <td >10</td>
                                        <td >Administrasi Infrastruktur Jaringan </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >11</td>
                                        <td >Sistem Komputer  </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >12</td>
                                        <td >Pemograman Dasar</td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    </tbody>

                                    <tr>
                                        <td colspan="2"><strong>C3. PAKET KEAHLIAN</strong></td>
                                    </tr>                                    
                                    <tbody>
                                    <tr>
                                        <td >13</td>
                                        <td >Administrasi Sistem Jaringan </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >14</td>
                                        <td >Teknologi Layanan Jaringan  </td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    <tr>
                                        <td >15</td>
                                        <td >Produk Kreatif dan Kewirausahaan</td>
                                        <td >82 (C)</td>
                                        <td >90 (B)</td>
                                        <td >B</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                                <div class="tab-pane fade" id="bordered-deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                                <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table" >
                                    <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Ekstrakurikuler</h4>
                                        <br><br>    
                                    <thead style="color:#A3AED0;font-size:14px;">
                                    <tr>
                                        
                                        <th scope="col">No</th>
                                        <th scope="col">Kegiatan Eskul</th>
                                        <th scope="col">Predikat</th>
                                    </tr>
                                    </thead>

                            <tbody>
                            
                            <tr>
                                <td >1</td>
                                <td >
                                    <input type="text" class="form-control" id="eskul1" name="eskul1" placeholder="Masukkan Nama Eskul">
                                </td>
                                <td >
                                    <input type="text" class="form-control" id="predikateskul1" name="predikateskul1" placeholder="Masukkan Predikat Eskul">
                                </td>
                            </tr>

                            <tr>
                                <td >2</td>
                                <td >
                                    <input type="text" class="form-control" id="eskul2" name="eskul2" placeholder="Masukkan Nama Eskul">
                                </td>
                                <td >
                                    <input type="text" class="form-control" id="predikateskul2" name="predikateskul2" placeholder="Masukkan Predikat Eskul">
                                </td>
                            </tr>

                            <tr>
                                <td >3</td>
                                <td >
                                    <input type="text" class="form-control" id="eskul3" name="eskul3" placeholder="Masukkan Nama Eskul">
                                </td>
                                <td >
                                    <input type="text" class="form-control" id="predikateskul3" name="predikateskul3" placeholder="Masukkan Predikat Eskul">
                                </td>
                            </tr>
                        </table>

                        <table class="table" >
                            <br>
                            <h4 class="fw-bolder mt-2 ps-2 " style="color:#367FA9; float:left; font-size:18px;">Ketidakhadiran</h4>
                                <br><br>    
                            <thead style="color:#A3AED0;font-size:14px;">
                            <tr>
                                
                                <th scope="col">No</th>
                                <th scope="col">Jenis Ketidakhadiran</th>
                                <th scope="col">Jumlah Hari</th>
                            </tr>
                            </thead>

                            <tbody>
                            
                            <tr>
                                <td >1</td>
                                <td >Sakit</td>
                                <td >
                                    <input type="text" class="form-control" id="sakit" name="sakit" placeholder="Masukkan Jumlah Hari Sakit">
                                </td>
                            </tr>

                            <tr>
                                <td >2</td>
                                <td >Izin</td>
                                <td >
                                    <input type="text" class="form-control" id="izin" name="izin" placeholder="Masukkan Jumlah Hari Izin">
                                </td>
                            </tr>

                            <tr>
                                <td >3</td>
                                <td >Tanpa Keterangan</td>
                                <td >
                                    <input type="text" class="form-control" id="alfa" name="alfa" placeholder="Masukkan Jumlah Hari Tanpa Keterangan">
                                </td>
                            </tr>
                        </table>
                        <div class="mt-3" style="float:right;">
                            <button href="" class="btn btn-delete rounded-pill ms-2">Cancel</button>
                            <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
                        </div>


                    </div><!-- End Bordered Tabs -->

                    </div>
                </div>




@endsection