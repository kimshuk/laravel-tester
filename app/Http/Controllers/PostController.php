<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Post;

class PostController extends Controller
{
    public function store() {
         // Create a new post using the request data
        $post = new \App\Task;

        $post->title = request('title');

        $post->body = request('body');

        // Save it to the database

        $post->save();

        // And then redirect to the homepage

        return redirect('/');
    }
}
