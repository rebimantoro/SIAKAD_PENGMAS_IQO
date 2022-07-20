@extends('layouts.admin')
@section('sdm')
    <?php $sdm = 'active'; ?>
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
                            <table class="table">
                                <thead style="color:#A3AED0;font-size:14px;">
                                    <tr>

                                        <th scope="col">No</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">NIK</th>
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


                                    @foreach ($dataPegawai as $p)
                                        <tr>
                                            <td>{{$p->id}}</td>
                                            {{-- Show Images --}}
                                            <td><img src="{{ asset('storage/'.$p->foto) }}" width="50"
                                                    class="rounded-circle"></td>
                                            <td>{{ $p->nik_dt }}</td>
                                            <td>{{ $p->no_ktp }}</td>
                                            <td>{{ $p->nama_pegawai }}</td>
                                            <td>{{ $p->tempat_lahir }}</td>
                                            <td>{{ $p->tanggal_lahir }}</td>
                                            <td>{{ $p->jenis_kelamin }}</td>
                                            <td>{{ $p->tgl_masuk }}</td>
                                            <td>{{ $p->kontrak_kerja }}</td>
                                            <td>{{ $p->bagian }}</td>
                                            <td>{{ $p->jabatan_utama }}</td>
                                            <td>{{ $p->no_hp1 }}</td>
                                            <td>
                                                <div class="d-flex flex-row bd-highlight">
                                                    <a href="" class="btn btn-detail rounded-pill">Detail</a>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id_siswa" value="{{$p->id}}">
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
