@extends('layouts.app')

@section('content')
    
@if($user->category == 'admin')
    
@endif
    <div class="container">
        <h3>User name: {{$user->name}}</h3>
        <h4>User email: {{$user->email}}</h4>
        <h4>User status: {{$user->status}}</h4>
        <h4>User Category: {{$user->category}}</h4>
        <h4>Created At: {{$user->created_at}}</h4>

      
            <div>
                <form action="/admin/{{$user->id}}" method="post">
                    @csrf

                    @method('put')

                    <label for="status">User Status</label>
                    {{-- <input type="number" name="status" id="" value="{{$user->status}}"> --}}
                    <input type="hidden" name="status" id="" value=1>
                    <input class="btn btn-success" type="submit" value="Verify User">

                </form>

                <br>
                <br>
                <form action="/admin/{{$user->id}}" method="post">
                    @csrf

                    @method('put')

                    <label for="status">User Status</label>
                    {{-- <input type="number" name="status" id="" value="{{$user->status}}"> --}}
                    <input type="hidden" name="status" id="" value=0>
                    <input class="btn btn-warning" type="submit" value="Restrict User">

                </form>

                    <br>
                    <br>

                <form action="/admin/{{$user->id}}" method="post">
                    @csrf
                    @method('delete')

                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </div> 
            

          
    </div>

@endsection