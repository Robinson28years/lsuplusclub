@extends('app')
@section('content')
	@include('admin.nav')
	@include('editor::head')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">



	<div class="editor">
		<form class="" action="item" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label>活动标题</label>
		<input type="text" name="title"  class="form-control" value="" >
	</div>
	<div class="form-group">
		<label>报名截止日期</label>
		<input type="text" name="timeover"  class="form-control" value="">
	</div>
	<div class="form-group">
		<label>活动开始日期</label>
		<input type="text" name="timestar"  class="form-control" value="">
	</div>
			<textarea id='myEditor' name="content"></textarea>
			<input type="submit" class="btn btn-success btn-sm">
		</form>
	</div>
</div>
</div>
@endsection
