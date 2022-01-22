@extends('layouts.bg')

@section('content')
<div class="container">
    <div class="row align-content-center justify-content-center">
        <div class="col-lg-6 mb-4">
            <div class="container">
                <!-- Form Registrasi -->
                <div class="card">
                    <div class="card-header text-dark">
                        <i class="fas fa-cash-register mr-2"></i></i>Daftar Sekarang
                    </div>

                    <form class="form-box" method="post" action="{{ route('register') }}" >
                        @csrf

                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus placeholder="Nama Lengkap">

                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group mb-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-type Password">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-pill" value="{{__('Register') }}">
                        </div>    
                        
                        <p class="text-dark">Sudah punya akun? 
                            <a href="{{ route('login') }}" class="font-weight-bold">Masuk</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
