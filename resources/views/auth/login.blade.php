
@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class=" col-md-10  border" style="box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.2);">
            <div class="wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-6 border" style="background-image: url({{asset('image/ava-rbg.png')}}); background-position: center; background-repeat:no-repeat; background-size:100% 100%;">
                    </div>
                    <div class="col-lg-6 col-md-6 px-5 py-4 bg-light border">
                        <div class="row">
                            <div class="d-flex justify-content-end">
                                <i class="fa-brands fa-facebook-f m-2 border rounded-circle py-2 px-3 btn-hover"></i>
                                {{-- <i class="fa-brands fa-instagram m-2 border rounded-circle py-2 px-3 btn-hover"></i>
                                <i class="fa-brands fa-twitter m-2 border rounded-circle py-2 px-3 btn-hover"></i>
                                <i class="fa-brands fa-youtube m-2 border rounded-circle py-2 px-3 btn-hover"></i> --}}
                                <i class="fa-solid fa-earth-americas border m-2 rounded-circle py-2 px-3 btn-hover"></i>
                            </div>
                            <div class="col-12">
                                <h2 class="text-dark p-2">Welcome to AVA LMS</h2>
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
                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link " href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary btn-block mb-3 col-12 "> <i class=" fas fa-sign-in"></i>
                                        {{ __('Login') }}
                                    </button>
                                    
                                </div>
                                <div class="col-md-10">
                                    <a class="btn btn-warning btn-block col-12 border" href="{{ route('register') }}"> <i class="fa fa-user-plus" aria-hidden="true"></i>{{ __('Register') }}</a>
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