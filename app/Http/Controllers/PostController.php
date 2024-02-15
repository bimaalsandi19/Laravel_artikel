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
            'posts' => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => Post::where('slug', $slug)->firstorFail()
            // sama artinya
            // 'post' => Post::find($slug)
        ]);
    }
}
