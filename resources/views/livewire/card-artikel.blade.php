<div>
    <div class="card border-warning">
            <div class="card-header bg-warning justify-content-center d-flex">
              <strong>Artikel Terbaru</strong>
            </div>
            <div class="card-body">
                @foreach ($art as $a)
                <h5 class="card-title">{{ $a->judul }}</h5>
                <p class="card-text">{{ $a->deskripsi }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                @endforeach
              
            </div>
          </div>
</div>
