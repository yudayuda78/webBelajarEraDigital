@extends('layouts.main2')

@section('container')
    @include('layouts.navbar')
    <div class="hero-image" data-aos="fade-down" data-aos-duration="1500">
        <div class="headlines-wrapper" data-aos="fade-down" data-aos-duration="1000">
        <p class="landing-page-h1">
            Semua <span><b>Resource</b></span> yang Anda <b>butuhkan</b> dalam Pembelajaran <b>Ada Disini</b>
        </p>
        <p class="landing-page-p">
            It is a long established fact that a reader distracted by the readable content of a page when looking at its layout.
        </p>
        </div>
        <div class="search-bar">
            <form action="">
                <input type="text" placeholder="Modul Ajar Kelas 6 SD">
                <button><i class="fa fa-search" style="font-size: 16px"></i> Search</button>
            </form>
        </div>
        <div class="grid-pencapaian">
            <div class="pencapaian">
                <h1>150+<i class ="ri-arrow-up-fill"></i></h1>
                <p>Koleksi</p>
            </div>
            <div class="pencapaian">
                <h1>45+<i class ="ri-arrow-up-fill"></i></h1>
                <p>Kontributor</p>
            </div> 
            <div class="pencapaian">
                <h1>7K+<i class ="ri-arrow-up-fill"></i></h1>
                <p>Pengguna</p>
            </div> 
            <div class="pencapaian">
                <h1>15K<i class ="ri-arrow-up-fill"></i></h1>
                <p>Unduhan</p>
            </div> 
      </div>
      </div>
      @include('layouts.filter-koleksi')
      @include('layouts.carousel-home')
      @include('layouts.fitur')

    

    <div class="10">

    </div>



    </div>

    @include('tombolwa')
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

        var typed = new Typed(".belajarbersama", {
            strings: ["Mengapa Belajar Bersama TinyKit?"],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        });

        window.addEventListener('scroll', function() {
            const parallax = document.querySelector('.head1');
            const tombolKoleksi = document.querySelector('.koleksi');
            const sideScroll1 = document.querySelector('.ayam');
            const head4 = document.querySelector('.item1');
            let scrollPosition = window.pageYOffset;
            console.log(scrollPosition);

            console.log(head4);
            // tombolKoleksi.style.transform = 'translateY(' + scrollPosition+304 * 0.5 + 'px)';
            if (scrollPosition >= 230) {
                tombolKoleksi.classList.add('muncul');
            }
            if (scrollPosition >= 235) {
                sideScroll1.classList.add('muncul');
            }
            // if(scrollPosition ==130){
            //     head4.classList.add('muncul');
            // }
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
                infinite: true,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 3,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });

        $(document).ready(function() {
            $('.head6-class').slick({
                arrows: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
        });
    </script>
@endsection
