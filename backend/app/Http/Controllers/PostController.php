<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\Post as ModelsPost;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;

class PostController extends Controller
{
    public function index()
    {
        return view('post',[
            "title" => "post",
            "post" => Post::all()
         ]);
    }

    public function show(Post $post)

    {
        return view('posts',[
            "title" => "single posts",
            "post" => $post
        ]);
    }
}
