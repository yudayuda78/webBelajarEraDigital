@extends('layouts.main2')
@section('container')
    {{-- @include('layouts.navbar') --}}

    <div class="container">

        <div class="background">
            <form action="{{ route('password.update') }}" method="POST">

                @csrf
                @method('put')

                <ul>
                    <h1>Ubah Password</h1>
                    @if (session()->has('updateberhasil'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{ session('updateberhasil') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>{}
                    @endif
                    {{-- @if (session()->has('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginErrors') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif --}}

                    <li>
                        <input type="password" name="current_password" id="current_password" placeholder="Current Password">
                        @error("current_password")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </li>
                    <li>
                        <input type="password" name="password" id="password" placeholder="New Password">
                        @error('password')
                            <div class="invalid-feedback">
                                kasdasdasd
                            </div>
                        @enderror
                    </li>
                    <li>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                               asdasdasd
                            </div>
                        @enderror
                    </li>
                    {{-- <li>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" placeholder="password" value="{{ old('password', Auth::user()->password) }}">
                @error('password')
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                @enderror
            </li> --}}
                    


                    <li>
                        <button type="submit" name="login" class="btn btn-primary" value="LOGIN">Submit</button>
                    </li>
                    <li><a href="/register">Belum punya akun? Daftar disini</a></li>
                </ul>
            </form>
        </div>

    </div>

    @include('tombolwa')
    @include('layouts.footer')
@endsection
