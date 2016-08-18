@extends('app')
@section('content')
	<h1>articles</h1>

	<h2>{{$article->title}}</h2>
	<article class="body">
		{{$article->content}}

	</article>

@stop
