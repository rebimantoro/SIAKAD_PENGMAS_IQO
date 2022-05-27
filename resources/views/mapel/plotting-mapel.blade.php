@extends('layouts.admin')
@section('mapel')
    <?php $mapel = 'active'; ?>
@endsection
@section('plotting-mapel')
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
                        <br><br>
                        <div class="row px-2 mb-3">
                            <div class="col-md-3">
                                <select name="hari" class="form-select" aria-label="Pilih Hari">
                                    <option selected>-- Pilih Hari --</option>
                                    <option value="senin">Senin</option>
                                    <option value="selasa">Selasa</option>
                                    <option value="rabu">Rabu</option>
                                    <option value="kamis">Kamis</option>
                                    <option value="jumat">Jum'at</option>
                                    <option value="sabtu">Sabtu</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <select name="kelas" class="form-select" aria-label="Pilih Kelas">
                                    <option selected>-- Pilih Kelas --</option>
                                    <option value="1">10 A TKJ</option>
                                    <option value="2">11 B TKJ</option>
                                    <option value="3">12 Akuntansi</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <select name="periode" class="form-select" aria-label="Pilih Periode">
                                    <option selected>-- Pilih Periode --</option>
                                    <option value="sem1">Semester 1</option>
                                    <option value="sem2">Semester 2</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead style="color:#A3AED0;font-size:14px;">
                                    <tr>

                                        <th scope="col">No</th>
                                        <th scope="col">Pilihan Jam</th>
                                        <th scope="col">Pilihan Mata Pelajaran</th>
                                        <th scope="col">Pilihan Guru</th>
                                    </tr>
                                </thead>

                                <tbody>


                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div>
                                                <select name="jam" class="form-select" aria-label="Pilih Jam">
                                                    <option selected>-- Tidak Ada Jam --</option>
                                                    <option value="1">07:00-07:15</option>
                                                    <option value="2">07:30-08:00</option>
                                                    <option value="3">08:00-09:30</option>
                                                    <option value="4">09:30-10:00</option>
                                                    <option value="5">10:00-11:30</option>
                                                    <option value="6">11:30-13:00</option>
                                                    <option value="7">13:00-14:45</option>
                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select name="mapel" class="form-select" aria-label="Pilih Mata Pelajaran">
                                                    <option selected>-- Pilih Mata Pelajaran --</option>
                                                    <option value="1">Administrasi Insfrastruktur Jaringan</option>
                                                    <option value="2">Dasar Seni Audio Visual</option>
                                                    <option value="3">UPACARA</option>


                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select name="guru" class="form-select" aria-label="Pilih Guru">
                                                    <option selected>-- Pilih Guru --</option>
                                                    <option value="adin">0059 - Adin</option>
                                                    <option value="abdullah">0057 - Abdullah Musa, S.Pd</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Jam">
                                                    <option selected>-- Tidak Ada Jam --</option>
                                                    <option value="1">07:00-07:15</option>
                                                    <option value="2">07:30-08:00</option>
                                                    <option value="3">08:00-09:30</option>
                                                    <option value="4">09:30-10:00</option>
                                                    <option value="5">10:00-11:30</option>
                                                    <option value="6">11:30-13:00</option>
                                                    <option value="7">13:00-14:45</option>
                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Mata Pelajaran">
                                                    <option selected>-- Pilih Mata Pelajaran --</option>
                                                    <option value="1">Administrasi Insfrastruktur Jaringan</option>
                                                    <option value="2">Dasar Seni Audio Visual</option>
                                                    <option value="3">UPACARA</option>


                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Guru">
                                                    <option selected>-- Pilih Guru --</option>
                                                    <option value="adin">0059 - Adin</option>
                                                    <option value="abdullah">0057 - Abdullah Musa, S.Pd</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Jam">
                                                    <option selected>-- Tidak Ada Jam --</option>
                                                    <option value="1">07:00-07:15</option>
                                                    <option value="2">07:30-08:00</option>
                                                    <option value="3">08:00-09:30</option>
                                                    <option value="4">09:30-10:00</option>
                                                    <option value="5">10:00-11:30</option>
                                                    <option value="6">11:30-13:00</option>
                                                    <option value="7">13:00-14:45</option>
                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Mata Pelajaran">
                                                    <option selected>-- Pilih Mata Pelajaran --</option>
                                                    <option value="1">Administrasi Insfrastruktur Jaringan</option>
                                                    <option value="2">Dasar Seni Audio Visual</option>
                                                    <option value="3">UPACARA</option>


                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Guru">
                                                    <option selected>-- Pilih Guru --</option>
                                                    <option value="adin">0059 - Adin</option>
                                                    <option value="abdullah">0057 - Abdullah Musa, S.Pd</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Jam">
                                                    <option selected>-- Tidak Ada Jam --</option>
                                                    <option value="1">07:00-07:15</option>
                                                    <option value="2">07:30-08:00</option>
                                                    <option value="3">08:00-09:30</option>
                                                    <option value="4">09:30-10:00</option>
                                                    <option value="5">10:00-11:30</option>
                                                    <option value="6">11:30-13:00</option>
                                                    <option value="7">13:00-14:45</option>
                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Mata Pelajaran">
                                                    <option selected>-- Pilih Mata Pelajaran --</option>
                                                    <option value="1">Administrasi Insfrastruktur Jaringan</option>
                                                    <option value="2">Dasar Seni Audio Visual</option>
                                                    <option value="3">UPACARA</option>


                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Guru">
                                                    <option selected>-- Pilih Guru --</option>
                                                    <option value="adin">0059 - Adin</option>
                                                    <option value="abdullah">0057 - Abdullah Musa, S.Pd</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Jam">
                                                    <option selected>-- Tidak Ada Jam --</option>
                                                    <option value="1">07:00-07:15</option>
                                                    <option value="2">07:30-08:00</option>
                                                    <option value="3">08:00-09:30</option>
                                                    <option value="4">09:30-10:00</option>
                                                    <option value="5">10:00-11:30</option>
                                                    <option value="6">11:30-13:00</option>
                                                    <option value="7">13:00-14:45</option>
                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Mata Pelajaran">
                                                    <option selected>-- Pilih Mata Pelajaran --</option>
                                                    <option value="1">Administrasi Insfrastruktur Jaringan</option>
                                                    <option value="2">Dasar Seni Audio Visual</option>
                                                    <option value="3">UPACARA</option>


                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Guru">
                                                    <option selected>-- Pilih Guru --</option>
                                                    <option value="adin">0059 - Adin</option>
                                                    <option value="abdullah">0057 - Abdullah Musa, S.Pd</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Jam">
                                                    <option selected>-- Tidak Ada Jam --</option>
                                                    <option value="1">07:00-07:15</option>
                                                    <option value="2">07:30-08:00</option>
                                                    <option value="3">08:00-09:30</option>
                                                    <option value="4">09:30-10:00</option>
                                                    <option value="5">10:00-11:30</option>
                                                    <option value="6">11:30-13:00</option>
                                                    <option value="7">13:00-14:45</option>
                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Mata Pelajaran">
                                                    <option selected>-- Pilih Mata Pelajaran --</option>
                                                    <option value="1">Administrasi Insfrastruktur Jaringan</option>
                                                    <option value="2">Dasar Seni Audio Visual</option>
                                                    <option value="3">UPACARA</option>


                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Guru">
                                                    <option selected>-- Pilih Guru --</option>
                                                    <option value="adin">0059 - Adin</option>
                                                    <option value="abdullah">0057 - Abdullah Musa, S.Pd</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Jam">
                                                    <option selected>-- Tidak Ada Jam --</option>
                                                    <option value="1">07:00-07:15</option>
                                                    <option value="2">07:30-08:00</option>
                                                    <option value="3">08:00-09:30</option>
                                                    <option value="4">09:30-10:00</option>
                                                    <option value="5">10:00-11:30</option>
                                                    <option value="6">11:30-13:00</option>
                                                    <option value="7">13:00-14:45</option>
                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Mata Pelajaran">
                                                    <option selected>-- Pilih Mata Pelajaran --</option>
                                                    <option value="1">Administrasi Insfrastruktur Jaringan</option>
                                                    <option value="2">Dasar Seni Audio Visual</option>
                                                    <option value="3">UPACARA</option>


                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <select class="form-select" aria-label="Pilih Guru">
                                                    <option selected>-- Pilih Guru --</option>
                                                    <option value="adin">0059 - Adin</option>
                                                    <option value="abdullah">0057 - Abdullah Musa, S.Pd</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <div class="mb-3" style="float:right;">
                                <button href="" class="btn btn-delete rounded-pill ms-2">Cancel</button>
                                <button type="submit" class="btn btn-submit rounded-pill ms-2">Submit</button>
                            </div>
                            </table>
                        </div>
                    @endsection
