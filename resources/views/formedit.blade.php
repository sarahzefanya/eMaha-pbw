@extends('layouts.main')

@section('title', 'eMaha- Edit Student')

@section('content')
<div class="card mt-4">
    <div class="card-header"><strong>Form Data Student</strong></div>
    <div class="card-body">
        @php
        $minat = explode(',', $mhs->minat);

        @endphp
        <form action="/student/update/{{ $mhs->id }}" method="POST">
            @csrf

            @method('PUT')
            
            <div class="form-group w-25 ">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" value="{{ $mhs->nim }}" readonly>
            </div>

            <div class="form-group w-25 ">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}">
            </div>

            <label>Gender</label>
            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" value="Pria" {{ ($mhs->gender == 'Pria' ? 'checked':'') }}>
                <Label>Pria</Label>
            </div>
            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" value="Wanita" {{ ($mhs->gender == 'Wanita' ? 'checked':'') }}>
                <Label>Wanita</Label>
            </div>

            <label>Program Studi</label>
            <div class="form-group">
                <select name="prodi" class="form-control">
                    <option value="0">--Pilih Program Studi--</option>
                    <option value="Sistem Informasi" {{ ($mhs->prodi == 'Sistem Informasi' ? 'selected':'') }}>Sistem Informasi</option>
                    <option value="Informatika" {{ ($mhs->prodi == 'Informatika' ? 'selected':'') }}>Informatika</option>
                    <option value="Ilmu Komputer" {{ ($mhs->prodi == 'Ilmu Komputer' ? 'selected':'') }}>Ilmu Komputer</option>
                    <option value="Manajemen" {{ ($mhs->prodi == 'Manajemen' ? 'selected':'') }}>Manajemen</option>
                    <option value="Bioteknologi" {{ ($mhs->prodi == 'Bioteknologi' ? 'selected':'') }}>Bioteknologi</option>
                    <option value="Bahasa Inggris" {{ ($mhs->prodi == 'Bahasa Inggris' ? 'selected':'') }}>Bahasa Inggris</option>
                </select>
            </div>

            <label>Minat</label>
            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="Web" {{ in_array('Web', $minat) ? 'checked':'' }}>
                <Label>Web</Label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="Artificial Intelegent" {{ in_array('Artificial Intelegent', $minat) ? 'checked':'' }}>
                <Label>Artificial Intelegent</Label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="Cloud Computing" {{ in_array('Cloud Computing', $minat) ? 'checked':'' }}>
                <Label>Cloud Computing</Label>
            </div>

            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="Genetika Molekular" {{ in_array('Genetika Molekular', $minat) ? 'checked':'' }}>
                <Label>Genetika Molekular</Label>
            </div>

            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="Literal Listening" {{ in_array('Literal Listening', $minat) ? 'checked':'' }}>
                <Label>Literal Listening</Label>
            </div>
 
            <div class="form-group mt-4">
                <button type="submit" role="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

    
@endsection
    
