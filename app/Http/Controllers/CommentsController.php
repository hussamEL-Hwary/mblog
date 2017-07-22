<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comments;
class CommentsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth')->except('index');
  }

  public function store(Post $post)
    {
      Comments::create([
        'body'=>request('body'),
        'user_id'=>auth()->id(),
        'post_id'=>$post->id
      ]);
      return back();
    }
}
