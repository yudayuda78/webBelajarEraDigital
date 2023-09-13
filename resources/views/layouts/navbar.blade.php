<nav class="navbar ">
    <div class="container">
        <div class="container-fluid d-flex">
            <a class="navbar-brand" href="/">
                <img src="asset/logo.webp" alt="Logo" width="35" height="35"
                    class="d-inline-block align-text-top">
            </a>
            <ul class="navbar-nav d-flex flex-row " >
                <li class="nav-item p-1">
                    <a class="nav-link text-light active" href="/program">Program</a>
                </li>
                <li class="nav-item p-1">
                    <a class="nav-link text-light" href="/beranda">Koleksi</a>
                </li>
                <li class="nav-item p-1">
                    <a class="nav-link text-light" href="/hub">Hub</a>
                </li>
            </ul>

            @auth
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                <div class="d-flex button-login p-1">
                    <a href="/login"><button class="btn btn-outline-light" type="submit">Login</button></a>
                </div>
            @endauth

        </div>
    </div>
</nav>
