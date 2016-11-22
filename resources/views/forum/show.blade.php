@extends('app')
@section('content')
    @include('admin.punav')

    <script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
    <script >hljs.initHighlightingOnLoad();</script>
    <div class="container" style="margin-bottom: 5%">
        <div class="row">
            <div class="col-md-9">
                <div class="container">
                    <div class="media  col-md-6 col-md-offset-2">
                        <h2 class="">{{$discussion->title}}</h2>
                    </div>
                </div>

                    <div class="media">
                        <div class="media-left">
                            <a href="/user/{{$discussion->user->id}}">
                                <img src="{{$discussion->user->avatar}}" style="height: 64px;width: 64px" class="media-object img-circle">
                            </a>
                        </div>
                        <div class="media-body">

                             <a href="/user/{{$discussion->user->id}}">
                            {{$discussion->user->name}}</a>

                            <div class="media">
                                <h3>{!! $str !!}</h3>
                            </div>
                            <div class="pull-right" style="color: #7088A9">
                              发布于：  {{$discussion->created_at}}
                            </div>
                        </div>
                        @if(Auth::check())
                        @if($discussion->user->id==Auth::user()->id)
                        <div class="media-right">
                            <input class="btn btn-success"  type="button" onclick="window.location.href='/discuss/{{$discussion->id}}/edit'" value="修改">
                        </div>
                        @endif
                        @endif
                        <div class="media" style="color: #7088A9">
                           <h2 >评论区</h2>
                        </div>
                        @if (isset($discussion->comments))
                        @foreach($discussion->comments as $comment)
                                <div class="media " style="border-top: 2px solid #E4E3E5;margin-top: 3%;margin-bottom: 3%">
                                </div>
                                <div class="media">
                                    <a class="media-left" href="/user/{{$comment->user->id}}">
                                        <img src="{{$comment->user->avatar}}" style="height: 64px;width: 64px" class="media-object img-circle">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="/user/{{$comment->user->id}}">{{$comment->user->name}}</a></h5>
                                        {!!$comment->body!!}
                                    </div>
                                    <div class="pull-right" style="color: #7088A9">
                                        回复于：  {{$comment->created_at}}
                                    </div>
                                </div>

                            @endforeach
                        @endif
                        @if(Auth::check())
                        <div class="media" style="margin-top: 8%">
                            <div class="media-left">
                                <a href="#">
                                    <img src="{{Auth::user()->avatar}}" style="height: 64px;width: 64px" class="media-object img-circle">
                                </a>
                            </div>
                            <div class="media-body" >
                                <form class="form-group" action="/discuss/comment" method="post">
                                    <textarea class="form-control" name="body" rows="4" placeholder="支持Markdown语法"></textarea>

                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="discussion_id" value="{{ $discussion->id }}">
                                    <input class="form-control btn-success btn pull-right " type="submit"  value="发表评论">
                                </form>
                            </div>
                        </div>
                            @else
                            <input class="form-control btn-warning btn pull-right " type="button" onclick="window.location.href='/auth/login/'" value="登录并参与评论">
                        @endif


                    </div>
            </div>
        </div>
    </div>
@stop