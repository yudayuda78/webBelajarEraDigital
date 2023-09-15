@extends('layouts.main2')

@section('container')
    @include('layouts.navbar')


    <div class="card-content">
        @foreach ($isiEvent as $isi)
            <div class="card col-1" style="">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><a href="/event/{{ $isi->slug }}">{{ $isi->judul }}</a></p>
                </div>
            </div>
        @endforeach
    </div>


    @include('layouts.footer')
@endsection
