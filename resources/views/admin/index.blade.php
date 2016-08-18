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
@foreach($vip as $user)
	@if($user->isvip=="审核中")


	<tr>
		<td>{{$user->schoolid}}</td>
		<td>{{$user->name}}</td>
		<td>{{$user->class}}</td>
		<td>{{$user->phone}}</td>
		<td>{{$user->email}}</td>
		<td>
			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal{{$user->name}}">
 详情
</button>

<!-- Modal -->
<div class="modal fade" id="myModal{{$user->name}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel{{$user->name}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
        <h4 class="modal-title" id="myModalLabel{{$user->name}}">{{$user->name}}的申请</h4>
      </div>
      <div class="modal-body">
        <h2>是否了解计算机</h2>
			{{$user->cs2}}
		<h2>为什么加入俱乐部</h2>
				{{$user->cs21}}<br>
				{{$user->cs22}}<br>
				{{$user->cs23}}<br>
				{{$user->cs24}}<br>
				{{$user->cs25}}<br>
				{{$user->cs26}}<br>
		<h2>感兴趣的方向/想学习的知识</h2>
				{{$user->cs31}}<br>
				{{$user->cs32}}<br>
				{{$user->cs33}}<br>
				{{$user->cs34}}<br>
				{{$user->cs35}}<br>
				{{$user->cs36}}<br>
				{{$user->cs37}}<br>
				{{$user->cs38}}<br>
				{{$user->cs39}}<br>
				{{$user->cs310}}<br>
		<h2>想说的话</h2>
				{{$user->cs4}}<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

		</td>
		<td>
			<form class="" action="vip/applyadmin/{{$user->id}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				{{-- <input type="hidden" name="id" value="{{Auth::user()->id}}"> --}}
				<input type="hidden" name="reviewer" value="{{Auth::user()->name}}">
				<input type="submit" class="btn btn-success btn-sm" name="isvip" value="同意">
			</form>
		</td>
		<td>
			<form class="" action="vip/applyadmin/{{$user->id}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				{{-- <input type="hidden" name="email" value="{{$user->email}}"> --}}
				<input type="submit" class="btn btn-warning btn-sm" name="isvip" value="拒绝">
			</form>
		</td>
	</tr>
@endif
@endforeach
	</tbody>
</table>
</div>

<div class="container-fluid" style="
margin-top: 50px;
">
<label><h2>审核通过</h2></label>
<table class="table table-striped  ">
      <thead>
        <tr>
		<th>学号</th>
          <th>姓名</th>
          <th>班级</th>
          <th>手机号</th>
		  <th>邮箱</th>
		  <th>感兴趣的方向</th>
		  <th>
		  	详情
		  </th>
		  <th>
		  审核人
		  </th>
          {{-- <th>短号</th>
		  <th>是否报名网页设计大赛</th>
		  <th>是否报名程序设计大赛</th>
          <th>是否为会员</th> --}}
        </tr>
		</thead>
	<tbody>
@foreach($vip as $user)
	@if($user->isvip=="同意")


	<tr>
		<td>{{$user->schoolid}}</td>
		<td>{{$user->name}}</td>
		<td>{{$user->class}}</td>
		<td>{{$user->phone}}</td>
		<td>{{$user->email}}</td>
		<td>
				{{$user->cs31}}
				{{$user->cs32}}
				{{$user->cs33}}
				{{$user->cs34}}
				{{$user->cs35}}
				{{$user->cs36}}
				{{$user->cs37}}
				{{$user->cs38}}
				{{$user->cs39}}
				{{$user->cs310}}
		</td>
		<td>
			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal{{$user->name}}">
 详情
</button>

<!-- Modal -->
<div class="modal fade" id="myModal{{$user->name}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel{{$user->name}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
        <h4 class="modal-title" id="myModalLabel{{$user->name}}">{{$user->name}}的申请</h4>
      </div>
      <div class="modal-body">
        <h2>是否了解计算机</h2>
			{{$user->cs2}}
		<h2>为什么加入俱乐部</h2>
				{{$user->cs21}}<br>
				{{$user->cs22}}<br>
				{{$user->cs23}}<br>
				{{$user->cs24}}<br>
				{{$user->cs25}}<br>
				{{$user->cs26}}<br>
		<h2>感兴趣的方向/想学习的知识</h2>
				{{$user->cs31}}<br>
				{{$user->cs32}}<br>
				{{$user->cs33}}<br>
				{{$user->cs34}}<br>
				{{$user->cs35}}<br>
				{{$user->cs36}}<br>
				{{$user->cs37}}<br>
				{{$user->cs38}}<br>
				{{$user->cs39}}<br>
				{{$user->cs310}}<br>
		<h2>想说的话</h2>
				{{$user->cs4}}<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

		</td>
<td>
	{{$user->reviewer}}
</td>
	</tr>
@endif
@endforeach
	</tbody>
</table>
</div>



@endsection
