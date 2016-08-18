@extends('app')
@section('content')
	<link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
	<form class="form" action="/auth/register" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="text" placeholder="邮箱" name="email">
	<input type="text" placeholder="姓名" name="name">
	{{-- <input type="text" placeholder="学号" name="studentid">
	<input type="text" placeholder="班级(例如:计151)" name="class">
	<input type="text" placeholder="手机号" name="phone">
	<input type="text" placeholder="短号" name="sphone"> --}}
	<input type="password" placeholder="密码"  name="password">
	<input type="password" placeholder="确认密码" name="password_confirmation">
	 <input type="submit" value="创建账户" />
	<a href="lost.html">Lost your password?</a>
  </form>
	@include('errors.anyerrors')

@endsection
