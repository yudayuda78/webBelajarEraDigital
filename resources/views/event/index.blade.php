@extends('layouts.main2')

@section('container')
    @include('layouts.navbar')


    <div class="event-grid">
        @foreach ($isiEvent as $isi)
        <div class="card-event">
            <a href="/event/{{ $isi->slug }}"><img src="/img/{{ $isi->image }}" alt="Denim Jeans" style="width:100%"></a>
            <div class="text-event-wrapper">
                <p class="tags-event">Career Expo</p>
                <a href="/event/{{ $isi->slug }}" class="judul-event">{{ $isi->judul }}</a>
                <p class="tangal-event">27 Juli 2023 <b>(Sudah Selesai)</b></p>
            </div>
        </div>
        @endforeach
    </div>



    @include('layouts.footer')
@endsection
