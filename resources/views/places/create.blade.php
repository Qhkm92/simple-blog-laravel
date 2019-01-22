@extends('layout.app')

@section('content')
    <h1>Register Your Places</h1>  
    {!! Form::open(['action' => 'PlacesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name of Your Place')}}
        {{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Key in your place location'])}}
    </div>
    <div class="form-group">
        {{Form::label('details', 'Details of your place')}}
        {{Form::textarea('details', '',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Key in your place details'])}}
    </div>
 
    {{Form::submit('Submit', [ 'class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection