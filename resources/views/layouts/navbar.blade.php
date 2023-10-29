<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand fw-bold" href="/">
                <img src="{{ asset('asset/logo.webp') }}" alt="Logo" width="35" height="35" class="d-inline-block align-text-top"> TicyKit
            </a>
            <button class="navbar-toggler mt-auto ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light "></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <ul class="nav ml-auto navbar-nav flex-grow-1 pe-3">
                        <li class="nav-item flex-column ">
                            <a class="nav-link mt-auto align-text-top text-light" href="/koleksi" aria-expanded="page">
                                Koleksi
                            </a>
                        </li>

                        <li class="nav-item dropdown flex-colum show">
                            <a class="nav-link dropdown-toggle mt-auto align-text-top text-light" href="{{ url('/event') }}"
                                role="button" data-bs-toggle="dropdown" aria-expanded="page">
                                Event
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/event">Info Event</a></li>
                                <li><a class="dropdown-item" href="{{ url('/event/sertif') }}">Sertifikat</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown flex-colum show">
                            <a class="nav-link dropdown-toggle mt-auto align-text-top text-light" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="page">
                                Hubungi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Admin Kegiatan</a></li>
                                <li><a class="dropdown-item" href="#">Grup Whatsapp</a></li>
                            </ul>
                        </li>
                    </ul>

                    @auth
                        <ul class="mt-auto ms-auto nav ml-auto">
                            <li class="nav-item dropdown mt-auto">
                                <a class="nav-link dropdown-toggle align-text-top text-light" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Selamat Datang, {{ auth()->user()->namalengkap }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/profil/edit">Edit Profil</a></li>
                                    <li><a class="dropdown-item" href="/password/edit">Ubah Password</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <div class="flex-column button-login p-1 mt-auto ms-auto">
                            <a href="/login"><button class="btn btn-dark" type="submit"><i class ="ri-user-3-line"></i> Login</button></a>
                        </div>
                    @endauth

                </div>
            </div>


           
        </div>
    </div>
</nav>

{{-- <script src="{{ url('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script> --}}
<script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js') }}"></script>
<script src="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>




