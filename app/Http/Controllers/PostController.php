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

    public function edit($id = null){
        $posts = Post::where('id', $id)->first();
        $data['posts'] = $posts;
        return view('blog.edit', $data);
    }

    public function update(Request $request, $id = null){
        $posts = Post::where('id', $id)->first();
        $posts->id = $request->id;
        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->created_at = $request->created_at;
        $posts->updated_at = $request->updated_at;
        $posts->update();
        return redirect('/');
    }

    public function delete($id = null){
        $posts = Post::where('id', $id)->first();
        $posts->delete();
        return redirect('/');
    }
}
