<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "produk",
        "email" => "katalogproduk@gmail.com",
        "image" => "produk.jpg"
    ]);
});



Route::get('/kataloq produk', [PostController::class, 'index']);

// halaman singel post

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title'=> 'Post Categories',
        'categories'=> Category::all()
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){

    return view('category', [
        'title'=> $category->name,
        'post'=> $category->post,
        'category'=> $category->name
    ]);
});