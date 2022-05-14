@extends('layouts.auth')
@section('content')
<div class="main-content">
        <!-- Page content -->
        <div class="container mt-8 pb-6">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-3">
            <div class="card bg-secondary shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">
                <center>
                    <div class="logo">
                    <img src="http://smkdtbs.com/profil/logo_smk-min.png" class="img-responsive" width='50%' height='50%'/>
                        
                    </div><br><br>

                <form action="{{ route('login.post') }}" method="POST">
                @csrf
                    <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" id="email_address" placeholder="Email" class="form-control" name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    </div>
                    
                    <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    </div>

                    <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Login</button>
                    </div>

                    <div class="text-center text-muted mt-4">
                    <h4>copyright ©2022</h4>
                    </div>
                </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                <a href="{{ route('register') }}" class="text-light"><small>Register</small></a>
                </div>
            </div>
            </div>
        </div>
        </div>

    </div>

@endsection