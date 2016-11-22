@extends('app')
@section('content')
    @include('admin.punav')
    <script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
    <script >hljs.initHighlightingOnLoad();</script>
    <div class="container-fluid">
        <div class="row">
            <div class="media" style="background-color: #9E9993">
                <div class="container" style="margin-top: 3%;margin-bottom: 3%">


                <div class="media-left col-md-2 col-md-offset-2">
                   <a href="/user/avatar"><img class="media-object img-circle" alt="100*100" style="height: 100px;width: 100px" src="{{$user->avatar}}" ></a>
                </div>
                <div class="media-body" style="color: #FFFFFF">
                    <h5>
                    <p>姓名：{{$user->name}}</p>
                    <p>邮箱：{{$user->email}}</p>
                        @if(isset($user->vipuser))
{{--                            {{$user->vipuser}}--}}
                            <p>班级：{{$user->vipuser->class}}</p>
                        @endif
                    <p>注册时间：{{$user->created_at}}</p>
                    </h5>
                </div>
                    @if(isset(Auth::user()->id))
                    @if($user->id==Auth::user()->id)
                        <div class="media-right">
                            <input class="btn btn-success"  type="button" onclick="window.location.href='/person/{{$user->email}}'" value="修改">
                        </div>
                    @endif
                        @endif
            </div>
            </div>
            <div class="container">
                <h3>
                    {{$user->name}}发布的帖子
                </h3>
            </div>
            @if(isset($user->discussions))
            @foreach($user->discussions as $discussion)

                <div class="media">
                    <div class="media-middle col-md-6 col-md-offset-2">
                        <blockquote>
                            <p>
                                <a href="/discuss/{{$discussion->id}}">{{$discussion->title}}</a>
                            </p> <small>{{$discussion->user->name}}</small>
                        </blockquote>
                    </div>
                </div>
            @endforeach
            @endif
            <div class="container">
                <h3>
                    {{$user->name}}的回复
                </h3>
            </div>
            @if(isset($user->comments))
            @foreach($user->comments as $comment)
                <div class="media">
                    <div class="media-middle col-md-6 col-md-offset-2">
                        <blockquote>
                            <p>
                                <a href="/discuss/{{$comment->discussion->id}}">{{$comment->discussion->title}}</a>
                                <p><cite>{!!$comment->body!!}</cite></p>
                            </p> <small>{{$comment->user->name}}</small>
                        </blockquote>
                    </div>
                </div>
            @endforeach
                @endif
        </div>
    </div>

@stop