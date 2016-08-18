@extends('app')
@section('content')
	@include('admin.nav')
	@foreach($items as $item )
		<div class="col-md-4">
			<h5>
				{{$item->title}}
			</h5>
			<p style="color:rgb(149, 150, 129);">
				报名截止至：{{$item->timeover}}
			</p>
			<p style="color:rgb(149, 150, 129);">
				活动开始：{{$item->timestar}}
			</p>
			<div class="col-md-2">
			<input class="btn btn-info"  onclick="window.location.href='applyall/{{$item->id}}'" type="submit" value="报名情况">
				<input class="btn btn-success"  onclick="window.location.href='newedit/{{$item->id}}'" type="submit" value="修改内容">
			</div>


	<div class="col-md-8">

		<form class="" action="baoming/{{$item->id}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="hide" value="隐藏">
			<input class="btn btn-warning"  type="submit" value="隐藏该项目">
		</form>
		<form class="" action="baoming/{{$item->id}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="end" value="截止">
			<input class="btn btn-danger"  type="submit" value="日期截止">
		</form>
	</div>

		</div>
	@endforeach

@endsection
