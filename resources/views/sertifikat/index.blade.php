@extends('home.home-layouts.home-main')
@include('home.home-layouts.home-navbar')
@section('container')
    {{-- @include('layouts.navbar') --}}
    <div class="title-event-container">
        <div class="title-event-wrapper">
          <p>Sertifikat</p>
          <p>Diklat Nasional 32P Strategi Penerapan Asesmen dalam Kurikulum Merdeka Pelaksanaan 1-4 November 2023 </p>
        </div>
      </div>
    
    <div class="tablewrapper">
        <table id="myTable" class="table table-striped">
            <div class="search-bar">
                <form action="/sertifikat/16-19Oktober2023/search" method="GET">
                    <input class="form-control" type="search" name="search" placeholder="Cari nama anda disini">
                    <button class="btn-sertif btn btn-primary">Search</button>
                </form>
            </div>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Instansi</th>
                    <th scope="col">Fasilitas</th>
                    <th scope="col">Sertifikat</th>
                </tr>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="tbld">{{ $data->nama }}</td>
                        <td class="tbld">{{ $data->instansi }}</td>
                        <td class="tbld"><button class="btn-sertif btn btn-warning"><a href="{{ url('https://s.id/FasilNov1') }}" target="blank">Download</a></button></td>
                        <td class="tbld"><button class="btn-sertif btn btn-warning"><a href="{{ route('sertif.download', ['id' => $data->id]) }}">Download</a></button></td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
        <div class="pagi-sertif pagination">
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


