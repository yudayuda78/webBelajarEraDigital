<div class="container">
    <div>
        <form action="{{ route('content.filter') }}" method="get">
            <select name="category" class="btn btn-secondary">
                <option value="">All Categories</option>
                <option value="game" {{ request('category') == 'game' ? 'selected' : '' }}>Game</option>
                <option value="modul ajar" {{ request('category') == 'modul ajar' ? 'selected' : '' }}>Modul Ajar
                </option>
                <option value="lkpd" {{ request('category') == 'lkpd' ? 'selected' : '' }}>LKPD / Worksheet</option>
                <option value="bahan ajar" {{ request('category') == 'bahan ajar' ? 'selected' : '' }}>Bahan Ajar
                </option>
            </select>
            {{-- <button type="submit" class="btn btn-primary">Filter</button> --}}
        </form>

        <form action="{{ route('content.filter') }}" method="get">
            <select name="kelas" class="btn btn-secondary">
                <option value="">Semua Kelas</option>
                <option value="tk">TK</option>
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
            {{-- <button type="submit" class="btn btn-primary">Filter</button> --}}
        </form>
    </div>




    <div class="content2">

        <div class="card-content">
            @foreach ($isiContent as $isi)
                <div class="card col-1" style="">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><a href="/koleksi/{{ $isi->slug }}">{{ $isi->title }}</a></p>
                    </div>
                </div>
            @endforeach
        </div>

        <nav aria-label="..." class="mx-auto" style="width: 200px;">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
