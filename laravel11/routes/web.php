
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

// PR Buat Rute baru
// 1. /blog dengan 2 buah artikel
// 2. /contact dengan email dan sosial media

// Rute baru untuk blog
Route::get('/blog', function () {
    $artikel = [
        [
            'judul' => 'Artikel 1',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.',
            'nama' => 'Rifki',
            'date' => '2018-09-01',
        ],
        [
            'judul' => 'Artikel 2',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.',
            'nama' => 'Khidir',
            'date' => '2021-08-01',
        ],
    ];

    return view('blog', ['title' => 'Blog'] , ['artikel' => $artikel]);
});

// Rute baru untuk contact
Route::get('/contact', function () {
    $kontak = [
        'email' => 'rifki@example.com',
        'sosial_media' => [
            'facebook' => 'https://www.facebook.com/rifki',
            'instagram' => 'https://www.instagram.com/rifki',
            'twitter' => 'https://www.twitter.com/rifki',
        ],
    ];

    return view('contact', ['title' => 'contact'], ['kontak' => $kontak]);
});