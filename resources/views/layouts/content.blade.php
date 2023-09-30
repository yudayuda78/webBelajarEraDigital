<div class="container">
    {{-- <div class="">
        <form action="{{ route('content.filter') }}" method="get">
            <select name="category" class="btn btn-secondary">
                <option value="">All Categories</option>
                <option value="game" {{ request('category') == 'game' ? 'selected' : '' }}>Game</option>
                <option value="modul ajar" {{ request('category') == 'modul ajar' ? 'selected' : '' }}>Modul Ajar
                </option>
                <option value="worksheet" {{ request('category') == 'worksheet' ? 'selected' : '' }}>LKPD / Worksheet
                </option>
                <option value="bahan ajar" {{ request('category') == 'bahan ajar' ? 'selected' : '' }}>Bahan Ajar
                </option>
            </select>
            
        </form>

        <form action="{{ route('content.filter') }}" method="get">
            <select name="kelas" class="btn btn-secondary">
                <option value="">Semua Kelas</option>
                <option value="tk">TK/PAUD</option>
                <option value="sd kelas 1">SD Kelas 1</option>
                <option value="sd kelas 2">SD Kelas 2</option>
                <option value="sd kelas 3">SD Kelas 3</option>
                <option value="sd kelas 4">SD Kelas 4</option>
                <option value="sd kelas 5">SD Kelas 5</option>
                <option value="sd kelas 6">SD Kelas 6</option>
                <option value="smp kelas 1">SMP Kelas 1</option>
                <option value="smp kelas 2">SMP Kelas 2</option>
                <option value="smp kelas 3">SMP Kelas 3</option>
                <option value="sma kelas 1">SMA Kelas 1</option>
                <option value="sma kelas 2">SMA Kelas 2</option>
                <option value="sma kelas 3">SMA Kelas 3</option>
            </select>
           
        </form>
    </div> --}}




    <div class="content-grid">

        <div class="card-content-grid-wrapper">
            <div class="card-content-grid">
                @foreach ($isiContent as $isi)
                    <div class="card-content-item" style="">
                        <a href="/koleksi/{{ $isi->slug }}">
                            <img src="img/{{ $isi->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">{{ $isi->title }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="d-flex justify-content-center">
            {{ $isiContent->links() }}
        </div>


    </div>
</div>
