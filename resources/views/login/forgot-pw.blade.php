@extends('layouts.main')
@include('partials.navbar')

@section('container')
<div class="col-md-9 col-lg-4 mx-auto px-3">
    <h3>Lupa Kata Sandi</h3>
    <p>Kirim permintaan untuk reset kata sandi</p>
    <form action="/login" method="post">
        <div class="form-group my-4">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control " id="email" required="" autofocus=""
                value="">
        </div>
        <button type="submit" class="btn btn-warning w-100">Masuk</button>
    </form>
</div>
@endsection