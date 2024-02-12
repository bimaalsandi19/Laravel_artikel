<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'name' => 'Bima Al Sandi',
        'email' => 'bimaalsandi19@gmail.com',
        'images' => 'person.jpg',
        'title' => 'About'
    ]);
});
Route::get('/blog', function () {

    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Bima Al Sandi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores perferendis, eum sit voluptates sunt assumenda adipisci repellendus nisi eaque unde porro tenetur tempore ducimus ut et magnam sint modi deserunt!'
        ],

        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Bima Al Sandi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores perferendis, eum sit voluptates sunt assumenda adipisci repellendus nisi eaque unde porro tenetur tempore ducimus ut et magnam sint modi deserunt!'
        ],
    ];
    return view('posts', [
        'title' => 'Posts',
        'posts' => Post::index()
    ]);
});


// Halaman single post
Route::get('/posts/{slug}', function ($slug) {

    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Bima Al Sandi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores perferendis, eum sit voluptates sunt assumenda adipisci repellendus nisi eaque unde porro tenetur tempore ducimus ut et magnam sint modi deserunt!'
        ],

        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Bima Al Sandi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores perferendis, eum sit voluptates sunt assumenda adipisci repellendus nisi eaque unde porro tenetur tempore ducimus ut et magnam sint modi deserunt!'
        ],
    ];

    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
