@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="row">
        <div class="col-12 col-md-6">
            <h3>Semua Diskusi</h3>
        </div>
        <div class="col-12 col-md-6">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12 text-end">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addDiscussModal">Buat
                diskusi baru</button>
        </div>
    </div>

    <div class="modal" id="addDiscussModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="model-title mb-0">Buat diskusi baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100% ;">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Judul diskusi</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" required placeholder="Enter email" autofocus required
                                value="{{ old('email') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Hastag</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-tag"></i>
                                </span>
                                <input type="password" name="password" class="form-control" id="password" required
                                    placeholder="Enter Password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Masuk</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
