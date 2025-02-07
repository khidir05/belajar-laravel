
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;

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
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog'] , ['posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($id);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
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