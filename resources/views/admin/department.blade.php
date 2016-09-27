@extends('app')
@section('content')
	@include('admin.nav')
	<div class="container-fluid" style="
	margin-top: 50px;
	">

	<label><h2>审核中</h2></label>
	<table class="table table-striped  ">
	  <thead>
		<tr>
		<th>姓名</th>
		  <th>班级</th>
		  <th>手机号</th>
		  <th>短号</th>
		  <th>邮箱</th>
		  <th>申请的部门</th>
		</tr>
		</thead>

	<tbody>
		@foreach($departments as $department)
			@if($department->status=="审核中")


	<tr>
		<td>{{$department->name}}</td>
		<td>{{$department->class}}</td>
		<td>{{$department->phone}}</td>
		<td>{{$department->sphone}}</td>
		<td>{{$department->email}}</td>
		<td>{{$department->department}}</td>
		<td>
			<form class="" action="department/{{$department->id}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" class="btn btn-success btn-sm" name="status" value="同意">
			</form>
		</td>
		<td>
			<form class="" action="department/{{$department->id}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" class="btn btn-warning btn-sm" name="status" value="不同意">
			</form>
		</td>
	</tr>
	@endif
	@endforeach
	</tbody>
	{{-- @endforeach --}}
	</table>
	</div>

	<div class="container-fluid" style="
margin-top: 50px;
">

<label><h2>办公室成员</h2></label>
<table class="table table-striped  ">
      <thead>
        <tr>
		<th>姓名</th>
          <th>班级</th>
          <th>手机号</th>
		  <th>短号</th>
		  <th>邮箱</th>
        </tr>
		</thead>

	<tbody>
		@foreach($departments as $department)
			@if($department->department=="办公室"&&$department->status=="同意")


	<tr>
		<td>{{$department->name}}</td>
		<td>{{$department->class}}</td>
		<td>{{$department->phone}}</td>
		<td>{{$department->sphone}}</td>
		<td>{{$department->email}}</td>
	</tr>
	@endif
	@endforeach
	</tbody>
{{-- @endforeach --}}
</table>
</div>

<div class="container-fluid" style="
margin-top: 50px;
">

<label><h2>技术部成员</h2></label>
<table class="table table-striped  ">
  <thead>
	<tr>
	<th>姓名</th>
	  <th>班级</th>
	  <th>手机号</th>
	  <th>短号</th>
	  <th>邮箱</th>
	</tr>
	</thead>

<tbody>
	@foreach($departments as $department)
		@if($department->department=="技术部"&&$department->status=="同意")


<tr>
	<td>{{$department->name}}</td>
	<td>{{$department->class}}</td>
	<td>{{$department->phone}}</td>
	<td>{{$department->sphone}}</td>
	<td>{{$department->email}}</td>
</tr>
@endif
@endforeach
</tbody>
{{-- @endforeach --}}
</table>
</div>



@endsection
