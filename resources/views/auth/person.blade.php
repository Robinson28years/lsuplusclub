@extends('app')
@section('content')
@include('admin.punav')
<div class="col-md-6 col-md-offset-3" style="border-bottom: 2px solid #E4E3E5;

">
   <h3 style="
margin-bottom: 30px;
">会员信息</h3>
 </div>
<div class="col-md-6 col-md-offset-3" style="
margin-top: 20px;
"
>


<form class="form" action="/person/{{$vip->id}}" method="post">
<div class="form-group">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
<label >姓名</label>
<input type="text" class="form-control"  value="{{$vip->name}}" name="name" readonly>
</div>
<div class="form-group">
<label >邮箱</label>
<input type="email" class="form-control"  value="{{$vip->email}}" name="email" readonly>
</div>
<div class="form-group">
<label >手机号</label>
<input type="text" class="form-control"  value="{{$vip->phone}}" name="phone">
</div>
<div class="form-group">
<label >短号</label>
<input type="text" class="form-control"  value="{{$vip->sphone}}" name="sphone">
</div>
<div class="form-group">
<label >学院</label>
<input type="text" class="form-control"  value="{{$vip->college}}" name="college">
</div>
<div class="form-group">
<label >班级</label>
<input type="text" class="form-control"  value="{{$vip->class}}" name="class">
</div>
<button type="submit" class="btn btn-warning">提交修改</button>
<input class="btn btn-info"  type="button" onclick="window.location.href='/'" value="返回首页">
</form>

</div>

@endsection
