@extends('home.home-layouts.home-main')

@section('container')
@include('home.home-layouts.home-navbar')

    <div class="title-event-container">
        <div class="title-event-wrapper">
            <p>Event</p>
            <p>{{ $event->judul }}</p>
        </div>
    </div>

    <div class="deskripsi-event-container">
        <div class="deskripsi-event-wrapper">
            <div class="flex-l">
                <img src="{{ asset('img/' . $event->image) }}" alt="Denim Jeans" style="width:100%">
                <p>Deskripsi Event</p>
                {{ $event->copywriter}}
                <p>Pembicara</p>
                <a target=blank href="{{ url($event->link) }}">{{ $event->link }} </a>
            </div>
            <div class="flex-r">
                <div class="card-join-event card">
                    <div class="card-body">
                      <p class="join-event-text card-text">Daftarkan diri anda pada <b>{{ $event->judul }}</b> pada link dibawah ini</p>
                      <a href="{{ url($event->link) }}" class="join-event-btn btn btn-primary">Join Diklat</a>
                    </div>
                </div>
                {{-- <br> --}}
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action {{-- active --}}">File Undangan</a>
                    <a href="#" class="list-group-item list-group-item-action">Link Twibbon</a>
                    <a href="#" class="list-group-item list-group-item-action">Link Fasilitas</a>
                    <a href="#" class="list-group-item list-group-item-action">Jadwal (Rundown) </a>
                    {{-- <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a> --}}
                  </div>
                {{-- <img src="{{ asset('img/' . $event->image) }}" alt="Denim Jeans" style="width:100%"> --}}
            </div>
        </div>
    </div>

    @include('home.home-layouts.home-kerjasama')
    @include('home.home-layouts.home-footer')
@endsection
