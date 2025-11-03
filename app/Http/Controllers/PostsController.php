<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    //
    public function index(){
        return view('posts.index');
    }

    public function postCreate(Request $request){
        $post = $request->input('post');
        Post::create(['user_id' => Auth::id(), 'post' => $post]);
        return back();
    }
}
