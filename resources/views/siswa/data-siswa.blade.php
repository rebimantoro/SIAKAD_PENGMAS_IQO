@extends('layouts.admin')
@section('siswa')
    <?php $siswa = 'active'; ?>
@endsection
@section('data-siswa')
    active
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Data Siswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Siswa</li>
                <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
        </nav>
    </div>

    <!-- tabel -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                        <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Data Siswa</h1>
                        <br><br>
                        <div class="row px-2">
                            <div class="col-md-3">
                                <select class="form-select" aria-label="Pilih Tahun Akademik">
                                    <option selected>-- Pilih Tahun Akademik --</option>
                                    <option value="1">2021/2022</option>
                                    <option value="2">2020/2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive" style="overflow-x:scroll">
                                <table class="table">
                                    <thead style="color:#A3AED0;font-size:14px;">
                                        <tr>

                                            <th scope="col">No</th>
                                            <th scope="col">NIS</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Tempat, Tanggal Lahir</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Tanggal Masuk</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($siswa as $sw)
                                            <tr>
                                                <td>{{$sw->id }}</td>
                                                <td> 1617210001 </td>
                                                <td> </td>
                                                <td> Aditya Faisal Rizki </td>
                                                <td> Laki-Laki </td>
                                                <td> Bogor , 08 September 2004</td>
                                                <td> Aktif </td>
                                                <td> 23 Juni 2019 </td>
                                                <td> X A TKJ (TKJ) </td>
                                                <td> <img src="{{ asset('assets/img/profile-img.jpg') }}" width="50"
                                                        alt="Profile" class="rounded-circle"></td>

                                                <td>
                                                    <div class="d-flex flex-row bd-highlight">
                                                        <a href="" class="btn btn-detail rounded-pill">Detail</a>
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
