
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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
    $posts = Post::with('author')->latest()->get();
    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts, // Eager load the category relationship
    ]);
});;

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

Route::get('/authors/{user:username}', function (User $user) {
    $posts = $user->posts->load('category', 'author');
    return view('posts', [
        'title' => count($user->posts) . ' Article By '. $user->name,
        'posts' => $user->posts,
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    $posts = $category->posts->load('category', 'author');
    return view('posts', [
        'title' => "Posts in {$category->category}",
        'posts' => $posts,
    ]);
});