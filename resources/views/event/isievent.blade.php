@extends('layouts.main2')

@section('container')
    @include('layouts.navbar')


    <div class="card-content">
        <img src="{{ $event->image }}" alt="kosong">
        <h1>{{ $event->judul }}</h1>
        
    </div>


    @include('layouts.footer')
@endsection
