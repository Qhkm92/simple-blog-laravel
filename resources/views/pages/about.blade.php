@extends('layout.app')    

@section('content')
        <h1>{{$title}}</h1>
        <p>Copy below link to register as our registered travel agency</p>
        @auth //only show for logged in users
  		<input type="text" readonly="readonly"
        value="{{ url('/') . '/?ref=' . Auth::user()->affiliate_id }}">
@endauth

@endsection
  