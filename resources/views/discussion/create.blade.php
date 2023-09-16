@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="row">
        <div class="col-12 col-md-6">
            <h3>Tambah diskusi baru</h3>
        </div>
        <div class="col-12 col-md-6">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
@endsection
