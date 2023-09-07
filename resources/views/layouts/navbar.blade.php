<nav class="navbar">
    <div class="container">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Bootstrap
            </a>

            @auth
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Selamat Datang, {{ auth()->user()->namalengkap }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/editprofil">Edit Profil</a></li>
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
                <div class="button-login">
                    <a href="/login"><button class="btn btn-outline-light" type="submit">Login</button></a>
                </div>
            @endauth

        </div>
    </div>
</nav>
