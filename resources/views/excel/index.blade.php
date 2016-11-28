@extends('app')
@section('content')
    @include('admin.punav')
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <input class="form-control btn-warning btn pull-right " type="button" onclick="window.location.href='/excel/export'" value="导出图书馆书籍">
        </div>
    </div>
    @stop