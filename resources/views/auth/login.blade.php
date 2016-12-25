@extends('app')
@section('content')
	<link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
	<form class="form" action="/auth/login" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="text" placeholder="邮箱" name="email">
	{{-- <input type="text" placeholder="姓名" name="name"> --}}
	{{-- <input type="text" placeholder="学号" name="studentid">
	<input type="text" placeholder="班级(例如:计151)" name="class">
	<input type="text" placeholder="手机号" name="phone">
	<input type="text" placeholder="短号" name="sphone"> --}}
	<input type="password" placeholder="密码"  name="password">
	 <input type="submit" value="登录" />
	<a href="/password/email">忘记或需要修改密码</a>
	<input type="btn" class="btn btn-success" onclick="window.location.href='/QRLogin'" value="扫码登录" style="background : #415671" />
		<a href="/plus.apk">安卓客户端下载</a>
  </form>

	@include('errors.anyerrors')

@endsection
