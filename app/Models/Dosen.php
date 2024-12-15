<?php

namespace App\Models;

class Dosen
{
    public string $nama;
    public string $nik;
    public array $pendidikan;
    public array $pekerjaan;
    public array $organisasi;

    // Constructor to initialize properties
    public function __construct(string $nama, string $nik, array $pendidikan, array $pekerjaan, array $organisasi)
    {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->pendidikan = $pendidikan;
        $this->pekerjaan = $pekerjaan;
        $this->organisasi = $organisasi;
    }
}
