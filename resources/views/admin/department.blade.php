@extends('app')
@section('content')
	@include('admin.nav')
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
			@if($department->department=="办公室")

			
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
		@if($department->department=="技术部")


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
