@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Create Post</h1>
        <form action="/posts" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="" placeholder="Post Title">
            </div>

            <div class="form-group">
                <label for="details">Details</label>
                <textarea class="form-control" name="details" id="" cols="30" rows="10" placeholder="Post Body"></textarea>
            </div>
            
            <input class="btn btn-info" type="submit" value="Create Post">
        </form>
            
    </div>

@endsection