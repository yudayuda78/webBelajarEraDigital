@extends('home.home-layouts.home-main')
@include('home.home-layouts.home-navbar')
@section('container')
    {{-- @include('layouts.navbar') --}}
    <div class="tablewrapper">
        <table id="myTable" class="mytable">
            <div class="search-bar">
                <form action="/sertifikat/16-19Oktober2023/search" method="GET">
                    <input type="search" name="search" placeholder="Cari nama anda disini">
                    <button><i class="fa fa-search" style="font-size: 16px"></i> Search</button>
                </form>
            </div>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Instansi</th>
                    <th>Fasilitas</th>
                    <th>Sertifikat</th>
                </tr>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->instansi }}</td>
                        <td><button class="tombol1"><a href="#">Download</a></button></td>
                        <td><button class="tombol2"><a href="{{ route('sertif.download', ['id' => $data->id]) }}">Download</a></button></td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
        <div class="pagination pagi-sertif">
            {{ $datas->links() }}
        </div>
    </div>
    




    {{-- @include('tombolwa') --}}
    @include('home.home-layouts.home-footer')
@endsection

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    var DataTable = require('datatables.net');
    require('datatables.net-responsive');

    let table = new DataTable('#myTable', {
        responsive: true
    });
    console.log(table);
</script>


