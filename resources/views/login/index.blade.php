@extends('layouts.main')

@section('container')
    <div class="background">
        <section>
            <div class="daun">
                <div class="set">
                    <div><img src="asset/daun2.webp" alt=""></div>
                    <div><img src="asset/bunga.webp" alt=""></div>
                    <div><img src="asset/daun2.webp" alt=""></div>
                    <div><img src="asset/bunga.webp" alt=""></div>
                    <div><img src="asset/daun2.webp" alt=""></div>
                    <div><img src="asset/bunga.webp" alt=""></div>
                    <div><img src="asset/daun2.webp" alt=""></div>
                    <div><img src="asset/bunga.webp" alt=""></div>
                </div>
            </div>
            <img src="asset/background2.webp" alt="" class="bg">
            <img src="asset/burung.webp" alt="" class="burung">
            <form action="/login" method="POST">
                @csrf
                <ul>
                    <h1>Login</h1>

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
                        <input type="email" name="email" id="email" placeholder="name@example.com"
                            class="form-control @error('email') is-invalid @enderror " required value={{ old('email') }}>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </li>
                    <li>
                        <input type="password" name="password" id="password" class="form-control" placeholder="password"
                            required>
                    </li>
                    <li>
                        <button type="submit" name="login" class="btn btn-primary" value="LOGIN">Submit</button>
                    </li>
                    <li><a href="/register">Belum punya akun? Daftar disini</a></li>
                </ul>
            </form>
        </section>

    </div>
@endsection
