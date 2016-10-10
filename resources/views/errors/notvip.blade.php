@extends('app')
@section('content')
    <strong>抱歉，您不是俱乐部会员，无法进入此界面</strong><br>
    <input type="submit" class="btn btn-info" value="返回" onclick="window.location.href='/'">
    @endsection