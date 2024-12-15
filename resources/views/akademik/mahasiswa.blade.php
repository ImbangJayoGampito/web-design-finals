@extends('HomeLayout.navbar')

@section('content')


    <div class="container p-5">
        <h1 class="display-6 fw-bold">Daftar Mahasiswa</h1>
        <div class="row">
            @foreach ($mahasiswaArray as $mahasiswa)
                <div class="col-md-4 mt-2">
                    <div class="card border-3 border-secondary h-100 shadow">
                        <div class="card-header text-center">
                            <h2>Mahasiswa</h2>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="{{ asset('images/elementor-placeholder-image.webp') }}"
                                alt="Card image cap">

                            <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
                            <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
                            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $mahasiswa->tempattanggallahir }}</p>
                            <p><strong>No HP:</strong> {{ $mahasiswa->noHp }}</p>
                            <p><strong>Alamat:</strong> {{ $mahasiswa->alamat }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
