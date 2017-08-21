@extends('master')
@section('title','Articles Page')
@section('content')
<h1>Conten Page</h1>
  @if(isset($article))
<ul>
 @foreach($article as $rct)
 	<li><h3>
 		<a href="/article/{{ $rct->id }}">{{$rct->title}}</a>
 	</li></h3>
 	<p>{{$rct->body}}</p>
 
 @endforeach
 </ul>
@endif

@endsection    