@extends('app')
@section('content')
@include('admin.nav')
	<div class="container-fluid" style="
margin-top: 50px;
">

<label><h2>{{$item->title}}报名情况</h2></label>
<table class="table table-striped  ">
      <thead>
        <tr>
		<th>学号</th>
          <th>姓名</th>
          <th>班级</th>
          <th>手机号</th>
		  <th>邮箱</th>
        </tr>
		</thead>

	<tbody>
		@foreach($users as $user)

	<tr>
		<td>{{$user->schoolid}}</td>
		<td>{{$user->name}}</td>
		<td>{{$user->class}}</td>
		<td>{{$user->phone}}</td>
		<td>{{$user->email}}</td>
	</tr>
	@endforeach
	</tbody>
{{-- @endforeach --}}
</table>
</div>


@endsection
