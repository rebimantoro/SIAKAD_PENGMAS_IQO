@extends('layouts.admin')
@section('sdm')
<?php $sdm="active"?>
@endsection
@section('data-pegawai')
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

<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Data Pegawai</h1>

                    </div>
                <div class="card-body">
                    
                    <div class="table-responsive" style="overflow-x:scroll">
                        <table class="table" >
                            <thead style="color:#A3AED0;font-size:14px;">
                            <tr>
                                
                                <th scope="col">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">NRP</th>
                                <th scope="col">KTP/NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tanggal Masuk</th>
                                <th scope="col">Kontrak</th>
                                <th scope="col">Bagian</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>

                            <tbody>

                            
                            <tr>
                                <td> 1</td>
                                <td><img src="{{asset('assets/img/profile-img.jpg')}}" width="50" alt="Profile" class="rounded-circle"></td>
                                <td >0720.21.0012</td>
                                <td ></td>
                                <td >Abdul Ajiz Afandy S.Pd.I</td>
                                <td >Bandung</td>
                                <td >12 Juni 1980</td>
                                <td >Laki-Laki</td>
                                <td >12 Juli 2020</td>
                                <td ></td>
                                <td >Kepala Sekolah</td>
                                <td ></td>
                                <td ></td>
                                <td >
                                <div class="d-flex flex-row bd-highlight">
                                    <a href="" class="btn btn-detail rounded-pill">Detail</a>
                                    <form action="" method="POST">  
                                      
                                        <button type="submit" class="btn btn-delete rounded-pill ms-2">Delete</button>
                                    </form> 
                                    </div>
                                </td>
                            </tr>
                            

                      
                            
                            </tbody>
                        </table>
</table>
</div>



@endsection