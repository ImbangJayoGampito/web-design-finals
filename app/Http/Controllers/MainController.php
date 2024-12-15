<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class MainController extends Controller
{
    private static array $urldirect = [
        "profil" => ['tentang', 'sejarah', 'organisasi1', 'organisasi2', 'kontak'],
        "akademik" => ['dosen', 'mahasiswa', 'matakuliah'],
        "fasilitas" => ['aplikasi', 'forum'],
        "berita" => ['lengkap']
    ];
    public function search(Request $search)
    {
        $query = $search->input('query'); // Assuming the search input is sent as 'query'


        // Return the search query as a string
        $cookieVal = Cookie::get(self::$darkModeCookie);
        return view('search', ['search' => $query, 'darkMode' => $cookieVal]);
    }
    private static string $darkModeCookie = "dark_mode";

    public static function getfile($parentDir = null, $name = null): \Illuminate\Contracts\View\View
    {
        $existDir = self::$urldirect[$parentDir] ?? [];

        if (!in_array($name, $existDir)) {
            return self::notFound($parentDir . "/" . $name);
        }

        $viewName = $parentDir . '/' . $name;
        $cookieVal = Cookie::get(self::$darkModeCookie);
        if (!View::exists($viewName)) {
            return view('construction', ['path' => $name, 'darkMode' => $cookieVal]);
        }

        // Get the dark mode cookie value
        Log::info("Cookie value: " . $cookieVal);

        return view($viewName, ['darkMode' => $cookieVal]);
    }

    public static function notFound($dirName): \Illuminate\Contracts\View\View
    {
        $cookieVal = Cookie::get(self::$darkModeCookie);
        return view('notfound', [
            'errorMessage' => "Maaf, URL pada direktori " . $dirName . " tidak ditemukan",
            'errorName' => "Error 404",
            'errorSolution' => "Masukkan URL yang benar",
            'darkMode' => $cookieVal
        ]);
    }

    public function toggleDarkmode(Request $request)
    {
        // This method is not needed if the middleware handles the toggle
        return redirect()->back()->with('success', 'Theme toggled');
    }

    public function getCookie()
    {
        // Logic to get a cookie (if needed)
        $darkMode = Cookie::get(self::$darkModeCookie);
        return response()->json(['dark_mode' => $darkMode]);
    }

    public function getPage($parentDir = null, $name = null)
    {

        return self::getfile($parentDir, $name);
    }
    public function getHomepage()
    {
        $cookieVal = Cookie::get(self::$darkModeCookie);
        return view('beranda', ['darkMode' => $cookieVal]);
    }
    public function pageMissing()
    {
        return self::notFound("unknown");
    }
    public function getDosen()
    {
        $dosens = [

            new Dosen(

                'Dr. John Doe',

                '123456789',

                ['S1 Pendidikan', 'S2 Pendidikan'],

                ['Dosen Universitas A'],

                ['Anggota Organisasi A']

            ),

            new Dosen(

                'Dr. Jane Smith',

                '987654321',
                ['S1 Matematika', 'S2 Matematika'],

                ['Dosen Universitas B'],

                ['Anggota Organisasi B']

            ),

            new Dosen(

                'Dr. Alice Johnson',

                '456789123',

                ['S1 Fisika', 'S2 Fisika'],

                ['Dosen Universitas C'],
                ['Anggota Organisasi C']
            ),

        ];


        // Pass the array of Dosen instances to the view
        $cookieVal = Cookie::get(self::$darkModeCookie);
        return view('akademik.dosen', ['dosens' => $dosens, 'darkMode' => $cookieVal]);
    }
    public function getMahasiswa()
    {
        $mahasiswaArray = [
            new Mahasiswa(
                'Andi Setiawan',
                '123456789',
                'Jakarta, 1 Januari 2000',
                '081234567890',
                'Jl. Merdeka No. 1, Jakarta'
            ),
            new Mahasiswa(
                'Siti Aminah',
                '987654321',
                'Bandung, 15 Februari 2001',
                '082345678901',
                'Jl. Kebon Jeruk No. 2, Bandung'
            ),
            new Mahasiswa(
                'Budi Santoso',
                '456789123',
                'Surabaya, 20 Maret 1999',
                '083456789012',
                'Jl. Pahlawan No. 3, Surabaya'
            ),
            new Mahasiswa(
                'Dewi Lestari',
                '321654987',
                'Yogyakarta, 5 April 2002',
                '084567890123',
                'Jl. Malioboro No. 4, Yogyakarta'
            ),
            new Mahasiswa(
                'Rina Pratiwi',
                '654321789',
                'Medan, 10 Mei 2003',
                '085678901234',
                'Jl. Sisingamangaraja No. 5, Medan'

            )
        ];
        $cookieVal = Cookie::get(self::$darkModeCookie);
        return view('akademik.mahasiswa', ["mahasiswaArray" => $mahasiswaArray, 'darkMode' => $cookieVal]);
    }
}
