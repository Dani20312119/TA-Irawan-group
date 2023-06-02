<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;


class PostController extends Controller
{
    public function index()
    {
        return view('post',[
            "title" => "post",
            "post" => post::all()
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