@extends('home.home-layouts.home-main')
@section('container')
    @include('home.home-layouts.home-popup')
    @include('home.home-layouts.home-navbar')
    @include('home.home-layouts.home-sidebarsocial')
    @include('home.home-layouts.home-header')
    @include('home.home-layouts.home-pencapaian')
    @include('home.home-layouts.home-layanan')
    @include('home.home-layouts.home-testimonial')
    @include('home.home-layouts.home-kerjasama')
    @include('home.home-layouts.home-footer')

    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
@endsection