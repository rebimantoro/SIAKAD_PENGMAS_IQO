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
            <li class="breadcrumb-item active">Data Raport</li>
        </ol>
    </nav>
</div>

<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Data Raport</h1>
                    <br><br>
                        <div class="row px-2 mb-3">

                            <div class="col-md-3">
                                <select class="form-select" aria-label="Pilih Kelas">
                                <option selected>-- Pilih Kelas --</option>
                                <option value="1">10 A TKJ</option>
                                <option value="2">11 B TKJ</option>
                                <option value="3">12 Akuntansi</option>
                                </select>
                            </div>
                        
                            <div class="col-md-3">
                                <select class="form-select" aria-label="Pilih Tahun Akademik">
                                <option selected>-- Pilih Tahun Akademik --</option>
                                <option value="1">2021/2022</option>
                                <option value="2">2020/2021</option>                
                                </select>
                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-submit rounded-pill ms-2">Tampilkan</button>
                            </div>

                            
                        </div>

                    </div>

                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table" >
                            <thead style="color:#A3AED0;font-size:14px;">
                            <tr>
                                
                                <th scope="col">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>

                            <tbody>

                            
                            <tr>
                                <td >1</td>
                                <td >1617210001</td>
                                <td >MUHAMMAD GHAZY TANTRA MAULIA</td>
                                <td >X A TKJ</td>
                                <td >
                                <div class="d-flex flex-row bd-highlight">
                                    <a href="" class="btn btn-print rounded-pill">Print</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td >2</td>
                                <td >1617210001</td>
                                <td >MUHAMMAD GHAZY TANTRA MAULIA</td>
                                <td >X A TKJ</td>
                                <td >
                                <div class="d-flex flex-row bd-highlight">
                                    <a href="" class="btn btn-disabled rounded-pill">Print</a>
                                    </div>
                                </td>
                            </tr>
                            
                            
                            </tbody>
                        </table>
</div>



@endsection