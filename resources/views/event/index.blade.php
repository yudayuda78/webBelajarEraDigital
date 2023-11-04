@extends('home.home-layouts.home-main')
@section('container')
@include('home.home-layouts.home-navbar')
@include('home.home-layouts.home-eventheader')
@include('home.home-layouts.home-pencapaian')

    <div class="event-grid">
        @foreach ($isiEvent as $isi)
        <div class="card-event">
            <a href="/event/{{ $isi->slug }}"><img src="/img/{{ $isi->image }}" alt="Denim Jeans" style="width:100%"></a>
            <div class="text-event-wrapper">
                <p class="tags-event">Career Expo</p>
                <a href="/event/{{ $isi->slug }}" class="judul-event">{{ $isi->judul }}</a>
                <p class="tangal-event">{{ $isi->tanggalpelaksanaan }} <b>{{ $isi->statuspelaksanaan }}</b></p>
            </div>
        </div>
        @endforeach
    </div>

@include('home.home-layouts.home-kerjasama')
@include('home.home-layouts.home-footer')
@endsection

