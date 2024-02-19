<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Posts',
            // 'posts' => Post::all()
            // Untuk menampilkan dati terbaru
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
            // 'post' => Post::where('slug', $slug)->firstorFail()
            // sama artinya
            // 'post' => Post::find($slug)
        ]);
    }
}
