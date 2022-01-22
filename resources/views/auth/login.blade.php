@extends('layouts.bg')

@section('content')
    <div class="container">
        <div class="row align-content-center justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header text-dark">
                        <i class="fas fa-sign-in-alt mr-2"></i>Yuk Masuk !!
                    </div>

                    <div class="form-box">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input mt-2" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <div class="col-md-6 offset-md-4"> <a
                                        class="border border-primary btn btn-lg  btn-block text-uppercase btn-outline"
                                        href="{{ url('auth/google') }}"><img
                                            src="https://img.icons8.com/color/16/000000/google-logo.png"> login
                                        with google</a> </div>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <!-- @if (Route::has('password.request'))
                                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                                        {{ __('Forgot Your Password?') }}
                                                                                    </a>
                                                                                @endif -->
                                </div>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
