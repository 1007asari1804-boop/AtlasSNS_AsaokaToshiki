<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostFormRequest;


class PostsController extends Controller
{
    //
    public function index(){
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function postCreate(PostFormRequest $request){
        $post = $request->input('post');
        Post::create(['user_id' => Auth::id(), 'post' => $post]);
        return back();
    }

    public function update(Request $request){
        $id = $request->input('id');
        $up_post = $request->input('upPost');
        Post::where('id', $id)->update(['post' => $up_post]);
        return redirect('/top');
    }

    public function delete($id){
        Post::where('id', $id)->delete();
        return back();
    }
}
