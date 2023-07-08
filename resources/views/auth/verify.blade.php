{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 border" style="box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.2);">
            <div class="wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-6" style="background-image: url({{asset('image/bg2.jpg')}});">
                    </div>
                    <div class="col-lg-6 col-md-6 px-5 py-4">
                        <div class="row">
                            <div class="d-flex justify-content-end">
                                <i class="fa-brands fa-facebook-f m-2 border rounded-circle py-2 px-3 btn-hover"></i>
                                <i class="fa-solid fa-earth-americas border m-2 rounded-circle py-2 px-3 btn-hover"></i>
                            </div>
                            <div class="col-12">
                                <h2 class="text-dark p-2">Welcome to Kamisama</h2>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="   mb-2" for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-2" for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-success btn-block mb-3 col-12 ">
                                        {{ __('Login') }}
                                    </button>
                                    
                                </div>
                                <div class="col-md-10">
                                    <a class="btn btn-info btn-block col-12 border" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection