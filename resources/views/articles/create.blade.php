@extends('app')
@section('content')
	<div class='container '>
	<h1>文章</h1>
		<div class="form-group">
    		<form  action="/articles" method="post">
				<label for="">name</label>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
    			<input class="form-control" type="text" name="title" value="">
				<label >articles</label>
				{{-- <div class="form-group">
					{!!form::label('content','content:')!!}
					{!!form::textarea('content',null,['class'=>'form-control'])!!}

				</div> --}}

    			<textarea class='form-control' rows="5" name="content" ></textarea>
				<div class='form-group'>
				  <label for=''>时间</label>
				  <input type="datetime-local",name="pubilish_at">

				</div>


				<button type="submit" class="btn btn-default">Submit</button>
    		</form>
    	</div>

	</div>
@include('errors.anyerrors')


@stop
