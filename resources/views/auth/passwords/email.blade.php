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
                        <span class="text-danger">Reset Password</span>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-12 mb-3">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row justify-content-center ">
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary col-12">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
