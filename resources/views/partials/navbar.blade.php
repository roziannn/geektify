@extends('layouts.main')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
    <div class="container">
        <a class="navbar-brand m-1 fs-3" href="/"><i class="ri-code-box-line"></i> Geektify</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
            aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasNavbar2"
            aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbar2Label"><i class="ri-code-box-line"></i> Geektify</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/diskusi">Diskusi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Kategori</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="">Halo, {{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button class="nav-link" type="submit">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>

                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>

<style>
    .nav-link {
        margin: 16px;
    }

    /* .nav-item:hover {
        background-color: rgb(70, 70, 70);
        color: #fff;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    } */
</style>
