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


        <form class="form" action="/resetpaw" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label >旧密码</label>
                <input type="password" class="form-control"   name="oldpassword" >
            </div>
            <div class="form-group">
                <label >新密码</label>
                <input type="password" class="form-control"  name="password" >
            </div>
            <div class="form-group">
                <label >确认新密码</label>
                <input type="password" class="form-control"  name="password_confirmation" >
            </div>


            <button type="submit" class="btn btn-warning">提交修改</button>
            <input class="btn btn-info"  type="button" onclick="window.location.href='/'" value="返回首页">
        </form>

    </div>

@endsection
