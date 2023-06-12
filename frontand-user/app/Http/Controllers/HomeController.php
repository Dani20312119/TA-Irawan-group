<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller

    {
        /**
         * Display a listing of the resource.
         * 
         */
        public function posts()
        {
            $response = Http::accept('application/json')->get(env('SERVER_API') . 'posts');

            $posts = json_decode($response)->posts;

            return view('post',[
                "title" => "All post",
                "active" => 'post',
                'posts' => collect($posts)
            ]);
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
           
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            //
        }
    
        /**
         * Display the specified resource.
         */
        public function show()
        {
            // return view('dashboard.posts.show', [
            //     'post' => 
            // ]);
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit()
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, )
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy()
        {
            //
        }
}
