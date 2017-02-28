<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>丽水学院ACM</title>
@yield('style')
<!-- Styles -->
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        {{-- <div class="col-md-8 col-md-offset-2"> --}}
        <div class="panel panel-default">
            <div class="panel-heading">丽水学院第十三届程序设计大赛报名</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/acm/store">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">姓名</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('studentid') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">长学号</label>

                        <div class="col-md-6">
                            <input id="password" type="text" class="form-control" name="studentid" required>

                            @if ($errors->has('studentid'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('studentid') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('college') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">学院</label>

                        <div class="col-md-6">
                            <select class="form-control" name="college">
                                <option></option>
                                <option>工学院</option>
                                <option>商学院</option>
                                <option>教育学院</option>
                                <option>医学院</option>
                                <option>生态学院</option>
                                <option>民族学院</option>
                                <option>青瓷学院</option>
                                <option>继职学院</option>
                            </select>
                            @if ($errors->has('college'))
                                <span class="help-block">
                                         <strong>{{ $errors->first('college') }}</strong>
                                     </span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group{{ $errors->has('grades') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">班级</label>

                        <div class="col-md-6">
                            <input id="grades" type="text" class="form-control" name="grades" value="{{ old('grades') }}" required>
                            @if ($errors->has('grades'))
                                <span class="help-block">
											<strong>{{ $errors->first('grades') }}</strong>
										</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">联系方式(长号)</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">

                            <button type="submit" class="btn btn-primary">
                                报名
                            </button>
                        </div>
                    </div>
                    {{--                        {!! Geetest::render('popup') !!}--}}
                </form>
            </div>
        </div>
        {{-- </div> --}}
    </div>
</div>
<div class="container">
        <p>Copyright © 2017 LSU ACM Team </p>
</div>
</body>
</html>
