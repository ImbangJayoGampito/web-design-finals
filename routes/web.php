<?php

use App\Http\Controllers\Controller; // Correct namespace

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\View;
use App\Http\Middleware\DarkModeToggle;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'getHomepage'])->middleware(DarkModeToggle::class);;
Route::get('/search', [MainController::class, 'search'])->name('products.search');
Route::get('/akademik/dosen', [MainController::class, 'getDosen'])->middleware(DarkModeToggle::class);
Route::get('/akademik/mahasiswa', [MainController::class, 'getMahasiswa'])->middleware(DarkModeToggle::class);
Route::get('/{parentDir?}/{name?}', [MainController::class, 'getPage'])->middleware(DarkModeToggle::class);;

Route::fallback(function () {
    return view('notfound', ['errorMessage' => "Salah memasukkan URL", 'errorName' => "Error 404", 'errorSolution' => "Masukkan URL yang benar"]);
});
Route::post('/cookie', [MainController::class, 'toggleDarkmode'])
    ->middleware(DarkModeToggle::class) // Apply the DarkModeToggle middleware
    ->name('execute.function');
