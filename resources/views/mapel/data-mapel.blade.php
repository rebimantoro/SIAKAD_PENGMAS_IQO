@extends('layouts.admin')
@section('mapel')
<?php $mapel="active"?>
@endsection
@section('data-mapel')
active
@endsection

@section('content')

<div class="pagetitle">
    <h1>Data Kelas</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Mata Pelajaran</li>
            <li class="breadcrumb-item active">Data Mapel</li>
        </ol>
    </nav>
</div>

<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Data Mapel</h1>

                    </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table" >
                            <thead style="color:#A3AED0;font-size:14px;">
                            <tr>
                                
                                <th scope="col">No</th>
                                <th scope="col">Kelompok Mapel</th>
                                <th scope="col">Nama Mapel</th>
                                <th scope="col">Guru</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>

                            <tbody>

                            
                            <tr>
                                <td >1</td>
                                <td >Muatan Nasional</td>
                                <td >Matematika</td>
                                <td >Sapria Muhammad, S.Pd.</td>
                                <td >X A TKJ, X B TKJ</td>
                                <td ></td>
                                <td >ON</td>
                                <td >
                                <div class="d-flex flex-row bd-highlight">
                                    <a href="/mapel/data-mapel/detail" class="btn btn-detail rounded-pill">Detail</a>
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