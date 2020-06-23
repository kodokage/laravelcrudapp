@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{$post->name}}</h1>
        <h3>{{$post->details}}</h3>

       @if(Auth::user()->status == 1)
            <div>
                <a class="btn btn-warning" href="/posts/{{$post->id}}/edit">Edit Post</a>
                    <br>
                    <br>
                <form action="/posts/{{$post->id}}" method="post">
                    @csrf
                    @method('delete')

                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </div> 
            
        @endif

          
    </div>

@endsection