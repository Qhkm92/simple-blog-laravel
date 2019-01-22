@extends('layout.app')

@section('content')
    <h1>Available Packages for Registered Travel Agencies</h1>  
    <form action="/search" method="POST" role="search">
        {{csrf_field()}}
        <div class="input-group">
            <input type="text" class="form-control" name="q" id="focusedInput" 
                placeholder="Search post"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button><hr>
                </span>
        </div>
    </form>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                    </div>
                </div>
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user['name']}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found </p>
    @endif

    
@endsection



