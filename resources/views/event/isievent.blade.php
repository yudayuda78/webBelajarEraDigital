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
                <p>Daftar Disini</p>
                <a target=blank href="{{ url($event->link) }}">{{ $event->link }} </a>
                
            </div>
            <div class="flex-r">
                <img src="{{ asset('img/' . $event->image) }}" alt="Denim Jeans" style="width:100%">
            </div>
        </div>
    </div>

    @include('home.home-layouts.home-kerjasama')
    @include('home.home-layouts.home-footer')
@endsection
