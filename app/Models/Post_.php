<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M.Novianto Anggoro",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut optio veritatis, mollitia molestias deleniti delectus! Ipsam deserunt, pariatur eum nam laborum corrupti modi quaerat explicabo!"
        ], [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Noviantika Anggraini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut optio veritatis, mollitia molestias deleniti delectus! Ipsam deserunt, pariatur eum nam laborum corrupti modi quaerat explicabo!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
};