<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Plus</title>
{{-- <link rel="stylesheet" href="{{asset('assets/css/style.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}"> --}}
<script type="text/javascript" src="http://cdn.staticfile.org/jquery/2.0.0/jquery.min.js"></script>
{{-- <script src="{{asset('assets/js/bootstrap.min.js') }}"></script> --}}
</style>

<body style="background-color: #F5F5F5;">
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
</body>
</html>
