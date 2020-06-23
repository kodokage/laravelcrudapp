@extends('layouts.app')

@section('content')

    <div class="container">
        
        <br>
        
        @if(auth()->user()->category == 'admin')
    

        <div>
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Category</th>
                <th></th>
                <th></th>
            </tr>
                @forelse($users as $user)
                   
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->status}}</td>
                            <td>{{$user->category}}</td>
                            <td>
                                <a class="btn btn-info" href="/admin/{{$user->id}}">Edit</a>
                                
                            

                            </td>
                            <td>
                                <form action="/posts/{{$user->name}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                   
                @empty
                    <p>No Users Registered</p>
                @endforelse 

            </table>
        </div>
     @endif

     <a class="btn btn-primary" href="/posts">View Posts</a>
            {{-- @forelse($posts as $post)
                
            <div class="panel mb-3">
                <h1>Title: {{$post->name}}</h1>
                <p>{{$post->details}}</p>
                <a class="btn btn-warning" href="/posts/{{$post->id}}/">View Post</a>
            </div>
                
            @empty
                <p>No posts available</p>
            @endforelse --}}

    </div>

@endsection