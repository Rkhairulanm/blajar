@extends('halaman.aplikasi')

@section('content')
    <form method="post" action="/siswa" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="NIK" class="form-label">NIK</label>
            <input type="text" class="form-control" id="NIK" name="NIK" value="{{ Session::get('NIK') }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ Session::get('nama') }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <textarea class="form-control" name="alamat">{{ Session::get('alamat') }}</textarea>
        </div>
        {{--  <div class="mb-3">
            <label for="Foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>  --}}
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    @endsection
