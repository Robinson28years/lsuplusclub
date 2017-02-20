@extends('layouts.nonav')
@section('content')
<div class="container">
	<label><h2>全部报名人员</h2></label>
<table class="table table-striped  ">
      <thead>
        <tr>
			<th>姓名</th>
			<th>学号</th>
			<th>学院</th>
          	<th>班级</th>
          	<th>手机号</th>
		  	<th>报名时间</th>
        </tr>
		</thead>
	<tbody>
@foreach($users as $user)


	<tr>
		<td>{{$user->name}}</td>
		<td>{{$user->studentid}}</td>
		<td>{{$user->college}}</td>
		<td>{{$user->grades}}</td>
		<td>{{$user->phone}}</td>
		<td>{{$user->created_at}}</td>
@endforeach
	</tbody>
</table>

</div>
@endsection
