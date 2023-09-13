@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="col-md-9 col-lg-4 mx-auto px-3">
        <h3>Daftar Akun</h3>
        <form action="/register" method="post">
            @csrf 
            <div class="form-group my-4">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" class="form-control " id="name" required="" autofocus=""
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
                <small class="text-muted">*Kata sandi minimal 8 karakter dengan huruf dan angka</small>
            </div>
            <button type="submit" class="btn btn-warning w-100">Buat Akun</button>
            
        </form>
        <p class="my-3 text-center">Sudah punya akun? <a href="/login" class="text-decoration-none">Masuk</a></p>
    </div>
@endsection
