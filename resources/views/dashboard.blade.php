@extends('auth.layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
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
    </div>
</div>
@endsection