@extends('layouts.admin')
@section('kelas')
    <?php $kelas = 'active'; ?>
@endsection
@section('data-kelas')
    active
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Data Kelas</h1>
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
                            <table class="table">
                                <thead style="color:#A3AED0;font-size:14px;">
                                    <tr>

                                        <th scope="col">No</th>
                                        <th scope="col">Tingkat</th>
                                        <th scope="col">Nama Kelas</th>
                                        <th scope="col">Wali Kelas</th>
                                        <th scope="col">Musyrifah 1</th>
                                        <th scope="col">Musyrifah 2</th>
                                        <th scope="col">Kapasitas Siswa</th>
                                        <th scope="col">Kurikulum</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($kelas1 as $ks)
                                        <tr>
                                            <td>{{ $ks->id }}</td>
                                            <td>{{ $ks->tingkat_kelas }}</td>
                                            <td>{{ $ks->nama_kelas }}</td>
                                            <td>{{ $ks->program_wali_kelas }}</td>
                                            <td>{{ $ks->musyrifah1 }}</td>
                                            <td>{{ $ks->musyrifah2 }}</td>
                                            <td>{{ $ks->kapasitas }}</td>
                                            <td>{{ $ks->kurikulum }}</td>
                                            <td>
                                                <div class="d-flex flex-row bd-highlight">
                                                    <a href="/kelas/data-kelas/detail"
                                                        class="btn btn-detail rounded-pill">Detail</a>
                                                    <form action="" method="POST">

                                                        <button type="submit"
                                                            class="btn btn-delete rounded-pill ms-2">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            </table>
                        </div>
                    @endsection
