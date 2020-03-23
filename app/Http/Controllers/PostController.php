<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request){
        $post = new Post;
        $post->id = $request->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->created_at = $request->created_at;
        $post->updated_at = $request->updated_at;
        $post->save();
        return redirect('/');
    }
}
