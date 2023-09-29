@extends('halaman.aplikasi')
@section('content')
    <h1>{{ $judul }}</h1>
    <p>
    <ul>
        <li>Email : {{$contact['email']}}</li>
    </ul>
    </p>
@endsection
