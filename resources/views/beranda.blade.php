@extends('HomeLayout.navbar')

@section('content')
    <div class="container  ">

        <div class="jumbotron">
            <h1 class="display-4 fw-bold ">Departemen Informatika</h1>
            <p class="lead ">Situs ini adalah salah satu desain ulang situs Informatika yang disusun oleh mahasiswa dengan
                nama
                Imbang Jayo Gampito dengan NIM 2311532002
            </p>
            <hr class="">
        </div>
        <div class="container p-5">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">


                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('images/IF1.jpeg') }}" alt="First slide">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/IF2.jpeg') }}" alt="Second slide">
                        <div class="carousel-caption bg-secondary bg-opacity-75 ">
                            <h3>Fakultas Teknologi Informasi</h3>
                            <p>Naungan dari departemen informatika</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/IF3.jpg') }}" alt="Third slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Quote of The Day
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>An idiot admires complexity, a genius admires simplicity</p>
                    <footer class="blockquote-footer">Terry A. Davis<cite title="Source Title"></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="container p-5">
        <br class="">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="display-6 fw-bold">Berita Terpanas</h1>
            </div>
            <div class="col-auto">
                <a href="/berita/lengkap" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        <hr class="my-4">


        <div class="row">
            <div class="col-sm-4 mt-2">
                <div class="card border-3 border-secondary card-in h-100 shadow">
                    <a href="/berita/id:11111">
                        <img class="card-img-top" src="{{ asset('images/elementor-placeholder-image.webp') }}"
                            alt="Card image cap"></a>
                    <div class="card-body ">
                        <h5 class="card-title">Berita Top Terpanas Terkini</h5>
                        <p class="card-text">Blablablablablablablabla PLACEHOLDER TEXT.</p>
                    </div>

                </div>


            </div>
            <div class="col-sm-4 mt-2">
                <div class="card border-3 border-secondary card-in h-100 shadow">
                    <a href="/berita/id:11222">
                        <img class="card-img-top" src="{{ asset('images/elementor-placeholder-image.webp') }}"
                            alt="Card image cap"></a>
                    <div class="card-body ">
                        <h5 class="card-title">Berita Top Terpanas Terkini</h5>
                        <p class="card-text">Blablablablablablablabla PLACEHOLDER TEXT.</p>
                    </div>

                </div>


            </div>
            <div class="col-sm-4 mt-2">
                <div class="card border-3 border-secondary card-in h-100 shadow">
                    <a href="/berita/id:1312123">
                        <img class="card-img-top" src="{{ asset('images/elementor-placeholder-image.webp') }}"
                            alt="Card image cap"></a>
                    <div class="card-body ">
                        <h5 class="card-title">Berita Top Terpanas Terkini</h5>
                        <p class="card-text">Blablablablablablablabla PLACEHOLDER TEXT.</p>
                    </div>

                </div>


            </div>

        </div>
    </div>
@endsection
