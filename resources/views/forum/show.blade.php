@extends('app')
@section('content')
    @include('admin.punav')

    <script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
    <script >hljs.initHighlightingOnLoad();</script>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="{{$discussion->user->avatar}}" style="height: 64px;width: 64px" class="media-object img-circle">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{$discussion->title}}</h4>
                            作者：{{$discussion->user->name}}
                            创建时间：{{$discussion->created_at}}

                        </div>
                        @if($discussion->user->id==Auth::user()->id)
                        <div class="media-right">
                            <input class="btn btn-success"  type="button" onclick="window.location.href='/discuss/{{$discussion->id}}/edit'" value="修改">
                        </div>
                        @endif
                        <div class="media">
                           <h3>{!! $str !!}</h3>
                        </div>
                        @foreach($discussion->comments as $comment)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img src="{{$comment->user->avatar}}" style="height: 64px;width: 64px" class="media-object img-circle">
                                </a>
                            </div>
                            <div class="media-body">

                                <h4 class="media-heading">
                                    {!!$comment->body!!}
                                </h4>
                                用户：{{$comment->user->name}}
                                创建时间：{{$comment->created_at}}

                            </div>
                        </div>
                            @endforeach
                            <form class="form-group" action="/discuss/comment" method="post">
                                  <textarea class="form-control" name="body" ></textarea>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="discussion_id" value="{{ $comment->discussion->id }}">
                                <input class="form-control btn-primary btn pull-right " type="submit">
                            </form>

                    </div>
            </div>
        </div>
    </div>
@stop