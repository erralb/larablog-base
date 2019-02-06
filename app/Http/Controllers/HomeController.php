<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $posts = \App\Post::take(3)->get(); //get 3 posts

        return view('welcome',array(
            'posts' => $posts
        ));
    }
}

