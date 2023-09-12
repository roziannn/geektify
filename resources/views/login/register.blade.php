@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="col-md-9 col-lg-4 mx-auto px-3">
        <h3>Daftar Akun</h3>
        <form action="/register" method="post">
            <div class="form-group my-4">
                <label for="email">Nama Lengkap</label>
                <input type="email" name="email" class="form-control " id="email" required="" autofocus=""
                    value="">
            </div>
            <div class="form-group my-4">
                <label for="email">Username</label>
                <input type="email" name="email" class="form-control " id="email" required="" autofocus=""
                    value="">
            </div>
            <div class="form-group my-4">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control " id="email" required="" autofocus=""
                    value="">
            </div>
            <div class="form-group my-4">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" class="form-control" id="password" required="">
            </div>
        </form>
        <a href="/register"><button type="submit" class="btn btn-warning w-100">Buat Akun</button>
        </a>
        <p class="my-3 text-center">Sudah punya akun? <a href="/login" class="text-decoration-none">Masuk</a></p>
    </div>
@endsection
