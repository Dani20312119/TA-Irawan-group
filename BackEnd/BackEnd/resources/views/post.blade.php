

@extends('layouts.main')


@section('container')

<h1 class="mb-5">Halaman Blog Post</h1>

  @foreach ($post as $post)
    <article class="mb-5 border-bottom pb-4">

      <h2>
        <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>


      <p>{{ $post->excerpt }}</p>

      <a href="/post/{{ $post->slug }}" class="text-decoration-none"> Read More.. </a>

    </article>

  @endforeach


@endsection

