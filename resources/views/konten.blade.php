<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Era Digital | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        /* navbar */
.navbar{
    background-color: #5259FF;
}

.btn{
    color: white;
    width: 5em;
    
}


.carousel-item{
    height: 50vh;
}

.card-content{
    height: 500px;
    width: 1000px;
}

.card{
    margin-left: 30px;
    margin-top: 5px;
}


footer{
    background-color: #5259FF;
    color: white;
    font-size: 1rem;
}

    </style>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Sora&display=swap" rel="stylesheet">
  </head>
  <body>
    


    <nav class="navbar">
        <div class="container">
          <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="/beranda">
              <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
              Bootstrap
           </a>
            <div class="button-login">
              <button class="btn btn-outline-light" type="submit">Akun</button>
              <button class="btn btn-outline-light" type="submit">Login</button>
            </div>
          </div>
        </div> 
    </nav>
    
    <img src="{{ $content->image }}" alt="kosong">
    <h1>{{ $content->title }}</h1>
    <h2>{{ $content->deskripsi }}</h2>
    <a href="{{ route('content.download', ['id' => $content->id]) }}" class="btn btn-primary">Download</a>
    
    <a href="/beranda">Back</a>


    <footer>
        <div class="container">
            <div>
                <div class="d-flex justify-content-around">
                    <div>
                        <h1>Tentang Kami</h1>
                        <ul class="list-group">
                            <li class="list-group">Cras justo odio</li>
                            <li class="list-group">Kami menyediakan berbagai sumber pelajaran gratis</li>
        
                        </ul>
                    </div>
                    <div>
                        <h1>Layanan Kami</h1>
                        <ul class="list-group">
                            <li class="list-group">Cras justo odio</li>
                            <li class="list-group">Dapibus ac facilisis in</li>
                            <li class="list-group">Morbi leo risus</li>
                            <li class="list-group">Porta ac consectetur ac</li>
                            <li class="list-group">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="foot-content">
                        <h1>Kontak Kami</h1>
                        <ul class="list-group">
                            <li class="list-group">Cras justo odio</li>
                            <li class="list-group">Dapibus ac facilisis in</li>
                            <li class="list-group">Morbi leo risus</li>
                            <li class="list-group">Porta ac consectetur ac</li>
                            <li class="list-group">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
        
                <div class="footer-image">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>