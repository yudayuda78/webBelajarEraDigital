@extends('layouts.main2')

@section('container')
    @include('layouts.navbar')

    <div class="">

        <div class="head1">
            <div class="container">
                <div class="container">
                    <div class="head1-content text-light ">
                        <h1>Semua yang Anda Butuhkan dalam Pembelajaran <br>ada di sini</h1>
                        <button type="button" class="head1-button btn btn-danger rounded-pill "><a href="/koleksi"
                                class="text-light text-center">Kunjungi</a></button>
                        
                    </div>
                    <img class="illust1" src="asset/illust1.webp" alt="">
                </div>
            </div>
        </div>

        <div class="head2 ">
            <div class="container">
                <div class="container ">
                    <div class="head2-content">
                        <h1><span class="auto-type"></span></h1>
                        <p class="head2p">TicyKit adalah Platform pendidikan yang menyediakan alat pembelajaran untuk para
                            pendidik, siswa,
                            dan orang tua yang mencari beragam kebutuhan untuk belajar, mengajar yang inovatif dan
                            berkualitas</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="head3">
            <div class="container">
                <div class="container">
                    <div class="head3-content">
                        <a href="/koleksi"><button
                                class="btn btn-success rounded-pill text-ligt koleksi">Koleksi</button></a>
                        <div class="ayam">
                            <div class="your-class">
                                <div class="myclass">
                                    <div class="wrapper-imgground"><img src="asset/modulajar.webp" alt="" class="imground"></div>
                                    <p><a href="" class="text-light">Worksheet</a></p>
                                </div>
                                <div class="myclass">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt="" class="imground"></div>
                                    <p><a href="" class="text-light">Workbook</a></p>
                                </div>
                                <div class="myclass">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt="" class="imground"></div>
                                    <p><a href="" class="text-light">Activity book</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Busy page</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Poster edukasi</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Games edukasi</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Worksheet</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Lesson plans</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Worksheet</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Hands on activities/ DIY</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Stories book</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Online exercises</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Modul proyek</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Modul ajar</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Diklat dan event</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Diklat dan event</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Ecourse</a></p>
                                </div>
                                <div class="myclass" class="imground">
                                    <div class="wrapper-imgground"><img src="asset/storiesbook.webp" alt=""></div>
                                    <p><a href="" class="text-light">Rapor proyek</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="container item-car1">
                            <div class="item1">
                                <h1 class="text-dark"> Woorksheet</h1>
                                <p>Worksheet Printable adalah alat pendidikan yang praktis dan mudah digunakan yang
                                    dirancang
                                    untuk
                                    mendukung proses pembelajaran di berbagai tingkatan pendidikan</p>
                                <button type="button" class="head1-button btn btn-danger rounded-pill "><a
                                        href="/koleksi" class="text-light text-center">Kunjungi</a></button>
                            </div>
                        </div>
                    </div>
                    <img src="" alt="">
                </div>
                <div class="carousel-item">
                       <div class="container">
                        <div class="container item-car1">
                            <div class="item1">
                                <h1 class="text-dark"> Workbook</h1>
                                <p>Workbook adalah sebuah buku yang berisi kumpulan kegiatan pembelajaran yang dirancang khusus untuk meningkatkan pemahamana dan keterampilan siswa
                                </p>
                                <button type="button" class="head1-button btn btn-danger rounded-pill "><a
                                        href="/koleksi" class="text-light text-center">Kunjungi</a></button>
                            </div>
                        </div>
                    </div>
                    <img src="" alt="">
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="container item-car1">
                            <div class="item1">
                                <h1 class="text-dark"> Activity book</h1>
                                <p>Activity book adalah buku yang dirancang khusus untuk memberikan pengalaman belajar yang interaktif dan praktis kepada siswa.
                                </p>
                                <button type="button " class="head1-button btn btn-danger rounded-pill "><a
                                        href="/koleksi" class="text-light text-center">Kunjungi</a></button>
                            </div>
                        </div>
                    </div>
                    <img src="" alt="">
                </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button> --}}
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>








        {{-- <div id="carouselExampleFade" class="carousel slide carousel-fade">


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1> Worksheet</h1>
                    <p>Worksheet Printable adalah alat pendidikan yang praktis dan mudah digunakan yang dirancang untuk
                        mendukung proses pembelajaran di berbagai tingkatan pendidikan</p>
                    <button type="button" class="head1-button btn btn-danger rounded-pill "><a href="/koleksi"
                            class="text-light text-center">Kunjungi</a></button>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="head4">
                <div class="container">
                    <div class="container">
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button> --}}
        {{-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                </div>
            </div>
        </div> --}}

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
                    <button id="prevBtn" class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button id="nextBtn" class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
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
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script>
        var typed = new Typed(".auto-type", {
            strings: ["Jelajahi Dunia Pengetahuan Bersama Kami"],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        });

        window.addEventListener('scroll', function() {
            const parallax = document.querySelector('.head1');
            let scrollPosition = window.pageYOffset;
            console.log(scrollPosition);
            // parallax.style.transform = 'translateY(' + scrollPosition * 0.5 + 'px)';
        });

        window.onload = (event) => {
            const head1p = document.querySelector('.head1-content');
            const head2p = document.querySelector('.head2p');
            const illust1 = document.querySelector('.illust1');
            
            illust1.classList.add('muncul');
            head1p.classList.add('muncul');
            head2p.classList.add('muncul');

        };

        $(document).ready(function() {
            $('.your-class').slick({
                arrows: true,
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 3
            });
        });
    </script>
@endsection
