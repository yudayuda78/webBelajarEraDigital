<div class="container">
<div>
    <button type="button" class="btn btn-outline-secondary" disabled>game</button>
    <button type="button" class="btn btn-outline-secondary" disabled>modul ajar</button>
    <button type="button" class="btn btn-outline-secondary" disabled>rpp</button>
    <button type="button" class="btn btn-outline-secondary" disabled>Button</button>
</div>


<div class="d-flex">
    <div class="drop-category d-flex flex-column">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              SMA
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>

        <div class="dropdown mt-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              SMP
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">SMP Kelas 7</a></li>
              <li><a class="dropdown-item" href="#">SMP Kelas 8</a></li>
              <li><a class="dropdown-item" href="#">SMP Kelas 9</a></li>
            </ul>
        </div>

        <div class="dropdown mt-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              SD
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>

    <div class="content2">

    <div class="card-content row">
        @foreach ($isiContent as $isi)
            
        
        <div class="card col-1" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"><a href="/konten/{{ $isi->slug }}">{{ $isi->title }}</a></p>
            </div>
        </div>
        @endforeach

        

      {{-- <div class="w-100"></div> --}}


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





</div>