@extends('layouts.app')

@section('content')

    <div class="container">
        <a class="btn btn-success" href="/posts/create">Add Post</a>
        <br>
        @forelse($posts as $post)
        
        <div class="panel mb-3">
            <h1>Title: {{$post->name}}</h1>
            <p>{{$post->details}}</p>
            <a class="btn btn-warning" href="/posts/{{$post->id}}/">View Post</a>
        </div>
            
        @empty
            <p>No posts available</p>
        @endforelse
            
    </div>

@endsection