<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {

        $posts = \App\Post::all(); //get all posts

        return view('welcome',array(
            'posts' => $posts
        ));
    }

public function show($post_name) {
    $post = \App\Post::where('post_name',$post_name)->get(); //get post

    return view('posts/single',array( //Pass the post to the view
        'post' => $post
    ));
}
}
