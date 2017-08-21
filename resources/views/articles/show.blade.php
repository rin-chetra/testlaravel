
@extends('master')
@section('title','Show Articles')
@section('content')

  <h2>{{$article->title}}</h2>
    <span>{{ $article->created_at}}</span>
    <p>{{$article->body}}</p>
   @section('sidebar')
       <h4>New Sidebar</h4>
     @parent
   @endsection


@endsection    