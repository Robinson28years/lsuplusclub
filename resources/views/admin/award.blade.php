@extends('app')
@section('content')
	@include('admin.nav')
	<div class="container-fluid" style="
	margin-top: 50px;
	">

	<label><h2>已上传人员</h2></label>
	<table class="table table-striped  ">
	  <thead>
		<tr>
		<th>姓名</th>
		  <th>班级</th>
		  <th>短号</th>
		  <th>邮箱</th>
		 <th>通关数</th>
		 <th>图片</th>

		  {{-- <th>申请的部门</th> --}}
		</tr>
		</thead>

	<tbody>
		@foreach($awards as $award)


	<tr>
		<td>{{$award->name}}</td>
		<td>{{$award->class}}</td>
		<td>{{$award->sphone}}</td>
		<td>{{$award->email}}</td>
		<td>{{$award->num}}</td>
		{{-- <td>{!!$award->content!!}</td> --}}
		<td>
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal{{$award->id}}">
详情
</button>

<!-- Modal -->
<div class="modal fade" id="myModal{{$award->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel{{$award->id}}">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
{{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
<h4 class="modal-title" id="myModalLabel{{$award->id}}">{{$award->name}}的图片</h4>
</div>
<div class="modal-body">
	{!!$award->content!!}
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</td>
	</tr>
	@endforeach
	</tbody>
	{{-- @endforeach --}}
	</table>
	</div>




@endsection
