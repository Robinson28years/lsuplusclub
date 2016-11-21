@extends('app')
@section('content')
    @include('admin.punav')
    <div class="container-fluid" style="margin-top: -1px;background: #E8ECF3;text-align: center;color: #7088A9">
        <div class="col-md-6 col-md-offset-3">
            <h3>欢迎来到LSUplus论坛(beta版)</h3>
            <h4>浙西南最大的程序员茶文化交流基地</h4>
        </div>
    </div>
    <div class="container" style="margin-top: 5%">
        <div class="col-md-2">
            <input type="button" class="btn btn-primary" onclick=location.href="/discuss/create" value="发布新的话题">
        </div>
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @foreach($discussions as  $discussion)
                            <div class="media">
                                <div class="media-left">
                                    <a href="/user/{{$discussion->user->id}}">
                                        <img src="{{$discussion->user->avatar}}" style="height: 64px;width: 64px" class="media-object img-circle">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <blockquote>
                                        <p>
                                        <div class="pull-right" style="color: #7088A9">
                                            <span class="glyphicon glyphicon-comment">
                                              {{count($discussion->comments)}}
                                            </span>
                                        </div>
                                            <a href="/discuss/{{$discussion->id}}">{{$discussion->title}}</a>

                                        </p> <small>{{$discussion->user->name}}<cite></cite></small>

                                    </blockquote>

                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>

@stop