@extends('layouts.master')

@section('content')

<a class="btn btn-outline-primary" href="/posts/create">Create Post</a>
  @foreach($posts as $post)
      @include('posts.posts')
  @endforeach

  <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
  </nav>

@endsection
