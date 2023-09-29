@extends('halaman.aplikasi')

@section('content')
    <div class="">
        <a href="/siswa" class="btn btn-secondary"><< kembali</a>
        <h1>{{$data->nama}}</h1>
        <p><b>Nomor Induk</b> {{$data->NIK}}</p>
        <p><b>Alamat</b> {{$data->alamat}}</p>
    </div>
@endsection
