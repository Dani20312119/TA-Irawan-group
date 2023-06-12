<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json([
            // "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return response()->json([
            "post" => $post
        ]);
    }
}
