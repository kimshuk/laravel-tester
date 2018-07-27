<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TaskController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

//    $tasks = DB::table('tasks')->get();

        return view('pages.index', compact('posts'));
    }

    public function show(Post $post)
    {
//        $post = Post::find($id);


        return view('tasks.show', compact('post'));
    }
}
