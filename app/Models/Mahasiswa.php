<?php

namespace App\Models;

class Mahasiswa
{
    public string $nama;
    public string $nim;
    public string $tempattanggallahir;
    public string $noHp;
    public string $alamat;

    // Constructor to initialize properties
    public function __construct(string $nama, string $nim, string $tempattanggallahir, string $noHp, string $alamat)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->tempattanggallahir = $tempattanggallahir;
        $this->noHp = $noHp;
        $this->alamat = $alamat;
    }
}
