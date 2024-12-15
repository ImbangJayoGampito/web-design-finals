@extends('HomeLayout.navbar')

@section('content')
    <div class="container p-5">
        <div class="row">
            @foreach ($dosens as $dosen)
                <div class="col-md-4 mt-2">
                    <div class="card border-3 border-secondary h-100 shadow">
                        <div class="card-header text-center">
                            <h2>Dosen</h2>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="{{ asset('images/elementor-placeholder-image.webp') }}"
                                alt="Card image cap">

                            <p><strong>Nama:</strong> {{ $dosen->nama }}</p>
                            <p><strong>NIK:</strong> {{ $dosen->nik }}</p>
                            <p><strong>Pendidikan:</strong> {{ implode(', ', $dosen->pendidikan) }}</p>
                            <p><strong>Pekerjaan:</strong> {{ implode(', ', $dosen->pekerjaan) }}</p>
                            <p><strong>Organisasi:</strong> {{ implode(', ', $dosen->organisasi) }}</p>
                        </div>



                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
