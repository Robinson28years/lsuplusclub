@extends('app')
@section('content')
    @include('admin.punav')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <label>原头像</label>
                <div class="text-center">

                <img src="{{Auth::user()->avatar}}"  width="200"  id="jcrop_target">

                </div>
                <div class="col-md-6">
                    <form action="/avatar" method="post"
                          enctype="multipart/form-data">
                        <label for="file">选择一个新头像:</label>
                        <input type="file" class="form-control" name="avatar" id="avatar" />
                        <br/>
                        <input type="submit" class="form-control btn-success" name="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--<script language="JavaScript">--}}
        {{--$(function(){ $('#jcrop_target').Jcrop(); });--}}
    {{--</script>--}}
    @stop
