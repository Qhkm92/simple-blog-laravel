@extends('layout.app')    

@section('content')
       
        <p>This is the about page</p>
        <p>This is api page</p>
        @foreach($nen as $miaw)
        <div>
        	<a href="/posts/{{ $miaw->id }}">{{$miaw->id}}<a>
        </div>
		



        @endforeach


@endsection
  