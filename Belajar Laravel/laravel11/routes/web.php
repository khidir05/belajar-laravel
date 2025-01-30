
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rifki']);
});

// PR Buat Rute baru
// 1. /blog dengan 2 buah artikel
// 2. /contact dengan email dan sosial media