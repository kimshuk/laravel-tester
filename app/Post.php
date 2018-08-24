<?php

namespace App;

class Post extends Model
{
    public function index()
    {
        $posts = Post::all();

//        $posts = DB::table('posts')->get();

        return view('partials.blogContent', compact('posts'));
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body) {
//        Comment::create([
//            'body' => $body,
//            'post_id' => $this->id
//        ]);

        $this->comments()->create(compact('body'));
    }
}
