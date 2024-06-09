@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                
<body class="bg-white">
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    <div class="header">
                        <h1>Welcome to our website.</h1>
                        <p>Sunshine Shoescare adalah solusi untuk sepatu anda menjadi bersih!</p>
                    </div>

                    <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}"
                                        novalidate>
                                        @csrf
                    <div class="login-form">
                        <label for="email" class="col-md-0 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <div class="text-center">
                            <span class="d-inline">Dont have an account? <a href="{{ url('register') }}" class="signup d-inline text-decoration-none">{{ __('Register here') }}</a>
                            </span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="login-right w-50 h-100">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-thumbnail d-block w-100" src="{{ Vite::asset('resources/images/shoe-cleaner.png') }}" alt="image">
                  </div>
                  <div class="carousel-item active">
                    <img class="img-thumbnail d-block w-100" src="{{ Vite::asset('resources/images/shoe-parfume.png') }}" alt="image">
                  </div>
                  <div class="carousel-item h-100">
                    <img class="img-thumbnail d-block w-100" src="{{ Vite::asset('resources/images/shoe-cleaner.png') }}" alt="image">
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
