@extends('layouts.master')

@section('content')

<a class="btn btn-primary" href="/posts/create">Create Post</a> <br><br>

  @foreach($posts as $post)
      @include('posts.posts')
  @endforeach

@endsection
