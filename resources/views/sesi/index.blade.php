@extends('halaman.aplikasi')

@section('content')

    <div class="w-50 center border rounded px-3 py-3">
        <h1>Login</h1>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-contro">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" class="form-contro">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" class="btn btn-primary">
                    login
                </button>
            </div>
        </form>
    </div>
@endsection
