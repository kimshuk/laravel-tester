@extends('layout')

@section('content')
    <div class="col-md-8 blog-main">
        @include('partials.blogPosts')


        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
    </div>
@endsection
