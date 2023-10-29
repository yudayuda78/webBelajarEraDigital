@extends('layouts.main2')

@section('container')
    @include('layouts.navbar')


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
                <a href="{{ url($event->link) }}">{{ $event->link }}</a>
                
            </div>
            <div class="flex-r">
                <img src="{{ asset('img/' . $event->image) }}" alt="Denim Jeans" style="width:100%">
            </div>
        </div>
    </div>

    <div class="card-content">
        <img src="{{ asset('img/' . $event->image) }}" alt="kosong">
        <h1>{{ $event->judul }}</h1>

    </div>


    @include('layouts.footer')
@endsection
