<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $response = Http::accept('application/json')->get(env('SERVER_API') . 'posts');

        $posts = json_decode($response)->posts;
        
        return view('dashboard.posts.index',[
            'posts' => collect($posts)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $response = Http::accept('application/json')->get(env('SERVER_API') . 'categories');

        $categories = json_decode($response)->categories;
        
       return view('dashboard.posts.create', [
        'categories' => collect($categories)
       ]);
    }

    
}
