<div class="blog-post">
        <h2 class="blog-post-title"><a href="/posts/{{$post->id}}"> {{ $post->title }}   </a></h2>
          <p class="blog-post-meta">
            {{$post->user->name}} on
            {{$post->created_at->toFormattedDateString()}}
          <a target="_blank" href="https://www.facebook.com/cando0"> Hossam</a> </p>

           {{ $post->body }}


       </div>
