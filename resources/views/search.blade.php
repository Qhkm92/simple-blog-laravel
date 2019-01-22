@extends('layout.app')

@section('content')

	  @if(count($searches) > 0)
        @foreach($searches as $search)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        {{-- <img style="width:50%" src="/storage/cover_images/{{$search->cover_image}}"> --}}
                    </div>
                    <div class="col-md-8 col-sm-8">
                    </div>
                </div>
                    <h3><a href="/search/{{$search->title}}">{{$search->title}}</a></h3>
                    <h2>{{$search->body}}</h2>
                    <small>Written on {{$search->created_at}} by {{$search->user['name']}}</small>
            </div>
        @endforeach
        
    @else
        <p>No post found </p>
    @endif

@endsection