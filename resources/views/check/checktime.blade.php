@extends('app')
@section('content')
	@include('admin.punav')
	<div class="col-md-6 col-md-offset-3" style="border-bottom: 2px solid #E4E3E5;

	">
	   <h3 style="
	margin-bottom: 30px;
	">互联网+俱乐部考勤系统</h3>
	 </div>
	<div class="col-md-6 col-md-offset-3" style="
	margin-top: 20px;
	"
	>


	<form class="form" action="/checktime" method="post">
	<div class="form-group">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 <div class="form-group">
	 <label >学号</label>
 	<input type="text" class="form-control"  value="" name="schoolid" >
	</div>
	<div class="form-group">
	<label >姓名</label>
	<input type="text" class="form-control"  value="" name="name" >
	</div>
	<div class="form-group">
	<label >班级</label>
	<input type="text" class="form-control"  value="" name="class">
	</div>
	<div class="form-group">
	<label >时间</label>
	<input type="text" class="form-control"  value="{{date("Y年j月n日H:m:s")}}" name="checktime">
	</div>
	<button type="submit" class="btn btn-warning">提交</button>
	</form>

	</div>
@endsection
