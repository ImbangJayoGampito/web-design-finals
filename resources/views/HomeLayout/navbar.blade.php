<!DOCTYPE html>
<html lang="en" data-bs-theme="{{ $darkMode }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootnavbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <title>Informatika Navbar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <meta name="description" content="Multi level hover dropdown Navbar for bootstrap 4" />
    <meta name="keywords" content="Multi level hover dropdown Navbar for bootstrap 4" />
</head>

<body>
    <div id="mainNavbar">
        <nav class="navbar navbar-expand-md navbar-light bg-secondary-subtle fixed-top" id="main_navbar">
            <div class="container-fluid">
                <img src="{{ asset('images/Logo_Unand.svg.png') }}" width="40" height="40" alt="Logo">
                <a class="navbar-brand" href="#">Informatika</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Profil
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profil/tentang">Tentang</a></li>
                                <li><a class="dropdown-item" href="/profil/sejarah">Sejarah</a></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown">
                                        Organisasi
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="https://himaif.lmp.web.id/">Himpunan
                                                Mahasiswa</a></li>
                                        <li><a class="dropdown-item" href="/profil/organisasi2">Organisasi 2</a></li>
                                        <li><a class="dropdown-item" href="/profil/organisasi3">Organisasi 3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="/profil/kontak">Kontak</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Akademik
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/akademik/dosen">Dosen</a></li>
                                <li><a class="dropdown-item" href="/akademik/mahasiswa">Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="/akademik/matakuliah">Mata Kuliah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" id="dropdown1">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Fasilitas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="https://laboratorium-informatika-ua.netlify.app/">Laboratorium</a></li>
                                <li><a class="dropdown-item" href="/fasilitas/aplikasi">Aplikasi</a></li>
                                <li><a class="dropdown-item" href="/fasilitas/forum">Forum</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form action="{{ route('execute.function') }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="toggle_dark_mode" value="true">
                        <button type="submit" class="btn btn-primary me-2">{{ ucfirst($darkMode ?? 'Light') }}</button>
                    </form>
                    <form class="d-flex" action="{{ route('products.search') }}" method="GET">
                        <input type="text" name="search" placeholder="Telusuri" class="form-control me-2">
                        <button type="submit" class="btn btn-outline-primary">Cari</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="separator"></div>
    </div>


    <script src="{{ asset('js/bootnavbar.js') }}"></script>
    @yield('content')
    @extends('HomeLayout.footer')
    <script>
        new bootnavbar();
    </script>
</body>

</html>
