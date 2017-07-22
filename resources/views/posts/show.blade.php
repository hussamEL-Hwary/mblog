@extends('layouts.master')

@section('content')
<div class="blog-post">
     <h1>{{ $post->title }}</h1>
     {{ $post->body }}
     <hr>
         <div class="comments">

              <ul class="list-group">
                @foreach($post->comments as $comment)
                <li class="list-group-item">
                  <strong>{{Auth::user()->name}}:&nbsp;</strong>
                  <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>
                  {{$comment->body}}
                </li>

                @endforeach

              </ul>
         </div>

       <hr>
       <div class="card">
         <div class="card-block">

           <form method="post" action="/posts/{{ $post->id }}/comment">
             {{ csrf_field() }}
             <div class="form-group">
               <textarea name="body" placeholder="add your comment" class="form-control"></textarea>

             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary"> Add Comment </button>

             </div>

           </form>

         </div>

       </div>
   </div>
@endsection
