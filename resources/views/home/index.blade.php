@extends('layouts.main')
@include('partials.navbar')

@section('container')
    @if (session()->has('successRegister'))
        <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
            {{ session('successRegister') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h2>Selamat Siang, {{ auth()->user()->name }}</h2>
    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum dolorem esse non similique. Architecto ab magni at
    </h3>
@endsection
