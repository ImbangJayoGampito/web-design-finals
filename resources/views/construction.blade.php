@extends('HomeLayout.navbar')
@section('content')

    <div class="d-flex flex-column align-items-center">
        <h1 class="fw-bold">Halaman {{ $path }} sedang dibuat</h1>
        <a href="/" class="btn btn-secondary z-10">Beranda</a>
        <img style="width: 50%; height: auto;" src="{{ asset('images/construction.svg') }}" class="negative-margin">

    </div>

@endsection
