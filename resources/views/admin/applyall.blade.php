@extends('app')
@section('content')
	@foreach ($items as $item)
		@if($item->title)


			<label><h2>{{$item->title}}</h2></label>
			<div class="container-fluid" style="
margin-top: 50px;
">
<table class="table table-striped  ">
      <thead>
        <tr>
		<th>学号</th>
          <th>姓名</th>
          <th>班级</th>
          <th>手机号</th>
		  <th>邮箱</th>

          {{-- <th>短号</th>
		  <th>是否报名网页设计大赛</th>
		  <th>是否报名程序设计大赛</th>
          <th>是否为会员</th> --}}
        </tr>
		</thead>

	<tbody>
		@foreach($users as $user)

	{{-- @if($user->6=="1") --}}

	<tr>
		<td>{{$user->schoolid}}</td>
		<td>{{$user->name}}</td>
		<td>{{$user->class}}</td>
		<td>{{$user->phone}}</td>
		<td>{{$user->email}}</td>

	</tr>
{{-- @endif --}}
	@endforeach
	</tbody>
{{-- @endforeach --}}
</table>
</div>
		@endif
	@endforeach

@endsection
