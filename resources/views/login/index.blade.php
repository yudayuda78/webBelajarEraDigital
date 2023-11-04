@extends('home.home-layouts.home-main')
@section('container')
<link rel="stylesheet" href="{{ asset('home-resource/css/login-register-style.css') }}">
@include('home.home-layouts.home-navbar')
    <style>
        body {
            background: #E8EEF0;
        }
    </style>
    <div class="login-form-container">
        <form action="/login" method="POST">
            @csrf
            <ul>
                <a href="/"><img class src="img/logo-login.png" alt=""></a>
                @if (session()->has('success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <li>
                    <input class="login-form" type="email" name="email" id="email" placeholder="Email"
                        class="form-control @error('email') is-invalid @enderror " required value={{ old('email') }}>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </li>
                <li>
                    <input class="login-form" type="password" name="password" id="password" class="form-control"
                        placeholder="Password" required>
                </li>
                <li>
                    <button type="submit" name="login" class="btn btn-primary" value="LOGIN">Submit</button>
                </li>
                <li class="emangtelat">Belum punya akun?<a href="/register"> <b>Daftar Disini Yuk!</b></a></li>
            </ul>
        </form>
        </section>

    </div>
    </div>
@endsection
