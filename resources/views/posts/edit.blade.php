@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Edit Posts</h1>
        <form action="/posts/{{$post->id}}/" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="" placeholder="Post Title" value="{{$post->name}}">
            </div>

            <div class="form-group">
                <label for="details">Details</label>
                <textarea class="form-control" name="details" id="" cols="30" rows="10" placeholder="Post Body">{{$post->details}}</textarea>
            </div>
            
            <input class="btn btn-info" type="submit" value="Save Post">
        </form>
            
    </div>

@endsection