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
                            <a class="nav-link dropdown-toggle mt-auto align-text-top text-light" href="/event"
                                role="button" data-bs-toggle="dropdown" aria-expanded="page">
                                Event
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/event">Info Event</a></li>
                                <li><a class="dropdown-item" href="/event/sertif">Sertifikat</a></li>
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
                            <a href="/login"><button class="btn btn-outline-light" type="submit">Login</button></a>
                        </div>
                    @endauth

                </div>
            </div>


           
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




{{-- <div class="container">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Offcanvas navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
</div> --}}
