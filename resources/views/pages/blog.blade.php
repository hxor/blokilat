@extends('layouts.front')

@section('content')
    <div class="col-md-8">

        <h1 class="page-header">
            Blog
            <small>All Posts Page</small>
        </h1>

        <!-- First Blog Post -->
        @foreach ($posts as $post)
            <h2>
                <a href="{{ route('post', $post->id) }}">{{ $post->title }}</a>
            </h2>
            
            <p class="lead">
                by <a href="#"><b>{{ $post->user->name }}</b></a>
            </p>
            
            <p>
                <span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM
            </p>
            <hr>
            
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr>
            
            <p>{!! str_limit($post->body, 500) !!}</p>
            <a class="btn btn-primary" href="{{ route('post', $post->id) }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>
        @endforeach

        <!-- Pager -->
        {{ $posts->links() }}

    </div>
@endsection