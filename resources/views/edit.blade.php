@extends('halaman.aplikasi')

@section('content')
<a href="/siswa" class="btn btn-secondary">kembali</a>
    <form method="post" action="{{ '/siswa/' .$data->NIK}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h1>Nomor Induk : {{ $data->NIK }}</h1>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <textarea class="form-control" name="alamat">{{ $data->alamat }}</textarea>
        </div>
        {{--  @if ($data->foto)
            <div class="mb-3">
                <img style="max-width: 50px" src="{{ url('foto') .'/'.$data->foto }}"/>
            </div>
        @endif
        <div class="mb-3">
            <label for="Foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>  --}}
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    @endsection
