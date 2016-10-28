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
	@include('admin.punav')
	@include('editor::head')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">



	<div class="editor">
		<form class="" action="award" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="userid" value="{{Auth::user()->id}}">
	<div class="form-group">

		<label>你的姓名</label>
		<input type="text" class="form-control" value="{{Auth::user()->name}}" readonly >
	</div>
<div class="alert alert-warning alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<strong>注意!</strong> 请诚实的输入你的通关数，并在下下方插入你的图片，图片插入请点击那个长的像图片一样的按钮（就是【图片】这两个字上方的按钮，然后选择图片插入，暂时还不支持拖拽插入，看右边预览，然后按底部提交）。图片需包含游戏关数和包含你名字的文本信息。（详情见群）
</div>
	<div class="form-group">
		<label>已通关数</label>
		<input type="number" name="num"  class="form-control" value="">
	</div>
			<textarea id='myEditor' name="content"></textarea>
			<input type="submit" class="btn btn-success btn-sm">
		</form>
	</div>
</div>
</div>
</body>
</html>
