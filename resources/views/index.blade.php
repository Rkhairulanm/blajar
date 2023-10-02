@extends('halaman.aplikasi')

@section('content')
    <a href="/siswa/create" class="btn btn-primary">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
                <tr>
                    <td>
                        {{ $i->NIK }}
                    </td>
                    <td>
                        {{ $i->nama }}
                    </td>
                    <td>
                        {{ $i->alamat }}
                    </td>
                    <td><a class="btn btn-secondary btn-md" href="{{url('/siswa/'.$i->NIK)}}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
@endsection
