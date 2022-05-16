@extends('layouts.admin')
@section('dashboard')
<?php $dashboard="active"?>
@endsection
@section('content')

<div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (Auth::user()->role == "1")
                        <p>Tampilan Khusus Kepsek dan Wakil Kepsek</p>
                        @elseif (Auth::user()->role == "2")
                        <p>Tampilan Khusus Bagian Kepegawaian</p>
                        @elseif (Auth::user()->role == "3")
                        <p>Tampilan Khusus Bagian Kurikulum</p>
                        @elseif (Auth::user()->role == "4")
                        <p>Tampilan Khusus Bagian Kesiswaan</p>
                        @elseif (Auth::user()->role == "5")
                        <p>Tampilan Khusus Guru</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>

@endsection