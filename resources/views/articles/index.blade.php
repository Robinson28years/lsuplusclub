@extends('app')
@section('content')
	<h1>articles</h1>
@foreach ($articles as $article)
	{{-- <h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2> --}}
	<h2><a href="{{url('articles',$article->id)}}">{{$article->title}}</a></h2>
	<article class="body">
		{{$article->content}}

	</article>
@endforeach
@stop
