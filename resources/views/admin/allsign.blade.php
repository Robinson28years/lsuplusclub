@extends('app')
@section('content')
@include('admin.nav')
<div class="container-fluid" style="
margin-top: 50px;
">
<label><h2>全部注册人员</h2></label>
<table class="table table-striped  ">
      <thead>
        <tr>
		{{-- <th>学号</th> --}}
          <th>姓名</th>
          {{-- <th>班级</th>
          <th>手机号</th> --}}
		  <th>邮箱</th>
		  <th>注册时间</th>
          {{-- <th>短号</th>
		  <th>是否报名网页设计大赛</th>
		  <th>是否报名程序设计大赛</th>
          <th>是否为会员</th> --}}
        </tr>
		</thead>
	<tbody>
@foreach($users as $user)


	<tr>
		{{-- <td>{{$user->schoolid}}</td> --}}
		<td>{{$user->name}}</td>
		{{-- <td>{{$user->class}}</td>
		<td>{{$user->phone}}</td> --}}
		<td>{{$user->email}}</td>
		<td>{{$user->created_at}}</td>

@endforeach
	</tbody>
</table>
</div>




@endsection
