@extends('layouts.main2')
@section('container')
    @include('layouts.navbar')
    <div class="container">

        <div class="download-content-wrapper">
            <div class="download-content">
                <img src="{{ asset('img/' . $content->image) }}" alt="kosong">
                <div class="deskripsi-content">
                    <h1>{{ $content->title }}</h1>
                    <h2>{{ $content->deskripsi }}</h2>

                    <div class="download-button">
                        <button type="button" class="btn btn-primary rounded-pill download"><a
                                href="{{ route('content.download', ['id' => $content->id]) }}"
                                class="text-light">Download</a></button>

                        <button type="button" class="btn btn-danger rounded-pill back"><a href="/koleksi"
                                class="text-light">Back</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('tombolwa')
    @include('layouts.footer')
@endsection
