<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    private static $blog_post = [
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

    public static function index()
    {
        return self::$blog_post;
    }
}
