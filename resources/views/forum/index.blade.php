@extends('app')
@section('content')
    @include('admin.punav')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @foreach($discussions as  $discussion)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="{{$discussion->user->avatar}}" style="height: 64px;width: 64px" class="media-object img-circle">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="/discuss/{{$discussion->id}}">{{$discussion->title}}</a></h4>
                            {{$discussion->user->name}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop