
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-md-10 col-lg-10" style="box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.2);">
            <div class="wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-6 border" style="background-image: url({{asset('image/Kamisama.png')}}); background-position: center;">
                    </div>
                    <div class="col-lg-6 col-md-6 border px-5 py-3 bg-light">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-dark p-2">Register to Kamisama</h2>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="mb-2" for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-2" for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-2" for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-2" for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control mb-3" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-info btn-block mb-2 col-12">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i> {{ __('Register') }}
                                    </button>
                                </div>
                                <div class="col-md-10">
                                    <a class="btn btn-warning btn-block col-12" href="{{ route('login') }}"><i class="fa fa-sign-in " aria-hidden="true"></i>{{ __('Login') }}</a>
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