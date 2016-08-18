@extends('app')
@section('content')
	<div class='container '>
	<h1>修改文章</h1>
		<div class="form-group">
    		<form  action="/articles/1" method="post">
				<input type="hidden" name="_method" value="patch">
				<label for="">name</label>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
    			<input class="form-control" type="text" name="title" value="{{$article->title}}">
				<label >articles</label>
    			<textarea class='form-control' rows="5" name="content" >{{$article->content}}</textarea>
				<div class='form-group'>
				  <label for=''>时间</label>
				  <input type="datetime-local",name="pubilish_at">

				</div>


				<button type="submit" class="btn btn-default">Submit</button>
    		</form>
    	</div>

	</div>
	<div class="container">
		@if($errors->any())
			<ul class="list-group">
				@foreach($errors->all() as $error)
					<li class="list-group-item list-group-item-danger">{{$error}}</li>
				@endforeach
			</ul>
			@endif

	</div>


@stop
