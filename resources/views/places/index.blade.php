@extends('layout.app')

@section('content')
    <h1>Places</h1>  
   
    @if(count($places) > 0)
     
    
        @foreach($places as $place)
        <div class="container">
            <div class="row">
                    <div class="col">  
                    <h3><a href="/places/{{$place->id}}">{{$place->name}}</a></h3>
                    <small>Written on {{$place->created_at}}</small>
                    </div>
            </div>
                  
        </div>
        @endforeach
        {{$places->links()}}
    @else
        <p>No post found </p>
    @endif
@endsection
