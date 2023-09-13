<div class="background">
    <form action="{{ route('profile.update') }}" method="POST">
        
        @csrf
        @method('put')
        
        <ul>
            <h1>My Profil</h1>
            @if (session()->has('updateberhasil'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('updateberhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
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
                <input type="email" name="email" id="email" placeholder="name@example.com "
                    value="{{ old('email', Auth::user()->email) }}"
                    class="form-control @error('email') is-invalid @enderror " required value={{ old('email') }}>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
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
                <input type="text" name="namalengkap"
                    class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap"
                    placeholder="nama lengkap"
                    value="{{ old('namalengkap', Auth::user()->namalengkap) }}">
                @error('namalengkap')
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                @enderror
            </li>
            <li>
                <input type="text" name="nomortelepon"
                    class="form-control @error('nomortelepon') is-invalid @enderror" id="nomortelepon"
                    placeholder="nomor telepon"  value="{{ old('nomortelepon', Auth::user()->nomortelepon) }}">
                @error('nomortelepon')
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                @enderror
            </li>
            <li>
                <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror"
                    id="pekerjaan" placeholder="pekerjaan"  value="{{ old('pekerjaan', Auth::user()->pekerjaan) }}">
                @error('pekerjaan')
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                @enderror
            </li>
            <li>
                <button type="submit" name="login" class="btn btn-primary" value="LOGIN">Submit</button>
            </li>
            <li><a href="/register">Belum punya akun? Daftar disini</a></li>
        </ul>
    </form>
</div>
