@extends('layout')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>


        <hr>

        <div class="card">
            <div class="card-block">
                <form action="/tasks/{{ $post->id }}/comments" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your comment here" name="body"></textarea>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection