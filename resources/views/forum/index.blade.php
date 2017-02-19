@extends('layouts.app')
@section('content')
    <jumbotron v-cloak>
        <h3>丽水学院互联网+俱乐部论坛</h3>

        <h6>浙西南最大的程序员茶文化交流基地</h6>
    </jumbotron>

	<div class="container list">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            @forelse($discussions as $discussion)
            <div class="media">
                <div class="media-body">
                    <h6 class="media-heading">
                        <a href="/discuss/{{$discussion->id}}">
                            {{ $discussion->title }}
                        </a>
                    </h6>
                    {{-- <div class="meta">
                        <span class="cinema">{{ $discussion->subtitle }}</span>
                    </div>
                    <div class="description">
                        {{ $discussion->meta_description }}
                    </div> --}}
                    <div class="extra">
                        {{-- @foreach($discussion->tags as $tag)
                        <a href="{{ url('tag', ['tag' => $tag->tag]) }}">
                            <div class="label"><i class="ion-pricetag"></i>{{ $tag->tag }}</div>
                        </a>
                        @endforeach --}}

                        <div class="info">
							@if(isset($discussion->last_user))
								<i class="ion-person"></i>	{{$discussion->last_user->name}}&nbsp;,&nbsp;
								回复于
								<i class="ion-clock"></i>{{$discussion->last_user->last_time}}&nbsp;,&nbsp;

								@else
									<i class="ion-person"></i>		{{$discussion->user->name}}&nbsp;,&nbsp;
									创建于
									<i class="ion-clock"></i>{{$discussion->created_at}}&nbsp;,&nbsp;
							@endif
                            {{-- <i class="ion-person"></i>{{ $discussion->user->name or 'null' }}&nbsp;,&nbsp;
                            <i class="ion-clock"></i>{{ $discussion->created_at}}&nbsp;,&nbsp; --}}
                            {{-- <i class="ion-ios-eye"></i>{{ $discussion->view_count }} --}}
                            <a href="/discuss/{{$discussion->id}}" class="pull-right">
                                Read More <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                {{-- <h3 class="text-center">{{ lang('Nothing') }}</h3> --}}
            @endforelse
			{!! $discussions->render() !!}
        </div>
		<div class="col-md-1">
			<a class="btn btn-success" name="button" href="/discuss/create">发布帖子</a>
		</div>
    </div>
</div>

    {{-- {{ $discussions->links() }} --}}

@endsection
