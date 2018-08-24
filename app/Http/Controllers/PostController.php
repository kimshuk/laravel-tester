<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

//    $tasks = DB::table('tasks')->get();

        return view('partials.blogContent', compact('posts'));
    }

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

    public function show(Post $post)
    {
//        $post = Post::find($id);


        return view('tasks.show', compact('post'));
    }
}
