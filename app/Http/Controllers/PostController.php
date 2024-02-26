<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            'title' => 'All Posts' . $title,
            // 'posts' => Post::all(),
            // Untuk menampilkan dati terbaru

            // WITH NYA DIPINDAHKAN KE MODEL POST
            // 'posts' => Post::with(['author', 'category'])->latest()->get(),

            // cara jika request di jalankan didalam model
            // 'posts' => Post::latest()->filter()->get(),

            // cara jika requet dijalankan didalam controller
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString(),
            'active' => 'posts'
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post,
            'active' => 'posts'

            // 'post' => Post::where('slug', $slug)->firstorFail()
            // sama artinya
            // 'post' => Post::find($slug)
        ]);
    }
}
