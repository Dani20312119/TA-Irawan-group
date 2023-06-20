@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row  my-3">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> to all my posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span>edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>delete</a>
                
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ 
                $post->category->name }}" class="img-fluid mt-3">

                <article class="my-3 fs-5">
                {!! $post->body !!}
              </article>
        
            <a href="/kataloq produk" class="d-block mt-">Back to post</a>
        </div>
    </div>
</div>
@endsection