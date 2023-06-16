@extends('layouts.main')

@section('title', 'eMaha - Student')

@section('content')
<div class="card mt-4">
    <div class="card-header">
        <a href="/student/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-square-fill"></i> Student</a>

        <form action="/student/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
    </div>

    <div class="card-body">
        @if (session('flash'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('flash') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('warning') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if (session('primary'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ session('primary') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr> 
                <th scope="col">Id</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Prodi</th>
                <th scope="col">Minat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($mhs as $idx => $n)
                  <tr>
                    <th scope="row">{{ $mhs->firstItem() + $idx}}</th>
                        <td>{{ $n->nim }}</td>
                        <td>{{ $n->nama }}</td>
                        <td>{{ $n->gender }}</td>
                        <td>{{ $n->prodi }}</td>
                        <td>{{ $n->minat }}</td>
                        <td>
                            <a href="/student/formedit/{{ $n->id }}" class="btn btn-warning"><i class="bi bi-pen"></i></a>

                            <a href="/student/delete/{{ $n->id }}" onclick="confirm('Apakah Anda yakin menghapus data {{ $n->nama }}?')" 
                              class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                  </tr>
                @endforeach
              
            </tbody>
          </table>  
          <span class="float-right">{{ $mhs->links() }}</span>
          
    </div>
</div>
@endsection