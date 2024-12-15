@extends('HomeLayout.navbar')

@section('content')


    <div class="d-flex justify-content-center align-items-center vh-100 "> <!-- Full height and center -->

        <div class="text-center "style="margin-top: -70px;"> <!-- Center text within the div -->
            <h1 class="fw-bold">Error: {{ $errorName }}</h1>
            <h5>Alasan: {{ $errorMessage }}</h5>
            <h5>{{ $errorSolution }}</h5>
            <a href="/" class="btn btn-secondary">Beranda</a>
        </div>
    </div>
@endsection
