@extends('HomeLayout.navbar')

@section('content')
 

    <div class="d-flex justify-content-center align-items-center vh-100 negative-margin"> <!-- Full height and center -->
        <div class="text-center">
            <h1 class="fw-bold">Tidak Ditemukan</h1>
            <h5>Hasil pencarian anda yang berupa "{{ $search }}" tidak menghasilkan apa-apa</h5>
            <a href="/" class="btn btn-secondary">Beranda</a>
        </div>
    </div>
@endsection
