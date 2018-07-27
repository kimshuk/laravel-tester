<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::all();

//    $tasks = DB::table('tasks')->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('pages.post');
    }
}
