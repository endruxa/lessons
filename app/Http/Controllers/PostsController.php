<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::chunk(100, function ($ids) {
            foreach ($ids as $id) {

            }
            dd($ids);
        });
        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

}
