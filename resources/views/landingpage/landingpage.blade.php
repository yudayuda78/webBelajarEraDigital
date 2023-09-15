@extends('layouts.main2')

@section('container')
    @include('layouts.navbar')

    <div class="">

        <div class="head1">
            <div class="container">
                <div class="container">
                    <div class="head1-content text-light ">
                        <h1>Semua yang Anda Butuhkan dalam Pembelajaran <br>ada di sini</h1>
                        <button type="button" class="btn btn-danger rounded-pill "><a href="/koleksi"
                                class="text-light text-center">Kunjungi</a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="head2 ">
            <div class="container">
                <div class="container ">
                    <div class="head2-content d-flex flex-column justify-content-center">
                        <h1><span class="auto-type"></span></h1>
                        <p>TicyKit adalah Platform pendidikan yang menyediakan alat pembelajaran untuk para pendidik, siswa, dan orang tua yang mencari beragam kebutuhan untuk belajar, mengajar yang inovatif dan berkualitas</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="head3">
            <div class="container">
                <div class="container">

                </div>
            </div>
        </div>

        <div class="head4">
            <div class="container">
                <div class="container">

                </div>
            </div>
        </div>

        <div class="head5">
            <div class="container">
                <div class="container">

                </div>
            </div>
        </div>

        <div class="head6">
            <div class="container">
                <div class="container">

                </div>
            </div>
        </div>

        <div class="head7">
            <div class="container">
                <div class="container">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>



    </div>

    @include('layouts.footer')


    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
        var typed = new Typed(".auto-type", {
            strings: ["Jelajahi Dunia Pengetahuan Bersama Kami"],
            typeSpeed: 50,
            backSpeed: 100,
            loop: true
        })
    </script>
@endsection
