<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create(
            request(['title', 'body'])
        );

        // And then redirect to the homepage

        return redirect('/posts/create');
    }
}
