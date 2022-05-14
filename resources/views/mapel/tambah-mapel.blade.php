@extends('layouts.admin')

@section('content')

<div class="pagetitle">
    <h1>Data Kelas</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Mata Pelajaran</li>
            <li class="breadcrumb-item active">Tambah Data Mapel</li>
        </ol>
    </nav>
</div>

<!-- tabel -->
<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <h1 class="fw-bolder mt-2 ps-2" style="color:#367FA9; float:left; font-size:20px;">Tambah Data Mapel</h1>

                    </div>
                <div class="card-body">

                    <div class="tab-content pt-2" id="borderedTabContent">
                        <div >
                        <form>

                            <div class="row px-2 mb-3">
                                <div class="col-md-6 ">
                                    <label for="nama-mapel">Nama Mata Pelajaran</label>
                                    <input type="text" class="form-control" id="nama-mapel" required name="nama-mapel" placeholder="Masukkan Nama Mata Pelajaran">
                                </div>
                                <div class="col-md-6">
                                    <label for="kelompok">Kelompok Mata Pelajaran</label>
                                    <select class="form-select" aria-label="Pilih Kelompok Mata Pelajaran">
                                    <option selected>-- Pilih Kelompok Mata Pelajaran --</option>
                                    <option value="nasional">Muatan Nasional</option>
                                    <option value="kewilayahan">Muatan Kewilayahan</option>                                    
                                    <option value="kejuruan">Muatan Peminatan Kejuruan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="p-2 mb-3">
                            <label for="desc-mapel">Deskripsi Mata Pelajaran</label>
                                <div class="input-group">
                                    <textarea type="text" class="form-control" id="desc-mapel" required name="desc-mapel" placeholder="Masukkan Deskripsi Mata Pelajaran">
                                    </textarea>
                                </div>
                            </div>



                            
                            <div class="row px-2 mb-3">
                                <div class="col-md-6">
                                    <label for="status">Status</label>
                                    <select class="form-select" aria-label="Pilih Status">
                                    <option selected>-- Pilih Status --</option>
                                    <option value="on">ON</option>
                                    <option value="off">OFF</option>
                                    </select>
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