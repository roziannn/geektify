@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="col-md-9 col-lg-4 mx-auto px-3">
        <h3>Login Akun</h3>

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">&times;</button>
            </div>
        @endif

        <form action="/login" method="post">
            @csrf
            <div class="form-group my-4">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control " id="email" required="" autofocus=""
                    value="">
            </div>
            <div class="form-group my-4">
                <label for="password">Kata sandi</label>
                <input type="password" name="password" class="form-control" id="password" required="">
                <p class="text-end"><a class="text-decoration-none" href="/forgot-password">Lupa kata sandi?</a></p>
            </div>
            <button type="submit" class="btn btn-warning w-100">Masuk</button>
        </form>
        <a href="/register"><button type="submit" class="btn btn-secondary w-100">Daftar
                Akun</button>
        </a>
    </div>
@endsection
