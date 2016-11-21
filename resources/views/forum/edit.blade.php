<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Plus</title>
    <script type="text/javascript" src="http://cdn.staticfile.org/jquery/2.0.0/jquery.min.js"></script>
</head>
<body style="background-color: #F5F5F5;">
@include('admin.punav')
@include('editor::head')
<div class="container">
    <div class="col-md-8 col-md-offset-2">



        <div class="editor">
            <form class="" action="/discuss/{{ $discussion->id }}/update" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>标题</label>
                    <input type="text" name="title"  class="form-control" value="{{ $discussion->title }}" >
                </div>
                <input type="hidden" name="id" value="{{ $discussion->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <textarea id='myEditor' name="body">{{$discussion->body}}</textarea>
                <input type="submit" class="btn btn-success btn-sm">
            </form>
        </div>
    </div>
</div>

</body>
</html>

