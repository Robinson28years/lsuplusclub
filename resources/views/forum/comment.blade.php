<div class="container">
	<comment>
	<div class="row comment">
		<div class="col-md-8 col-md-offset-2">
			<h5>评论</h5>
		</div>


		<div class="col-md-8 col-md-offset-2">
			@if (count($article->comments)>0)
			@foreach($article->comments as $comment)
				<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object img-circle" src="{{$comment->user->avatar}}">
					</a>
				</div>
				<div class="media-body box-body">
					<div class="heading">
						<i class="ion-person"></i>{{$comment->user->name}}
						&nbsp;&nbsp;&nbsp;&nbsp;
						<i class="ion-clock"></i>{{$comment->created_at}}
						<span class="pull-right operate">
							<a href="#">
								<i class="ion-trash-b"></i>
							</a>
							<a href="#" ><i class="ion-ios-undo"></i></a>
						</span>
					</div>
					<div class="comment-body markdown">{!!$comment->body!!}</div>
				</div>
			</div>
		@endforeach
		@else
			<div >Nothing...</div>
		@endif
		@if (Auth::check())
			<form action="/discuss/comment" method="post" class="form-horizontal" style="margin-top: 30px;" >
				{{ csrf_field() }}
				<div class="form-group">
					<label class="col-sm-2 control-label own-avatar">
						<a href="#">
							<img class="img-circle" src="{{Auth::user()->avatar}}">
						</a>
					</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="content" rows="7" name="body" placeholder="Markdown"></textarea>
					</div>
					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden"name="discussion_id"value="{{$article->id }}">
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-success pull-right">发表评论</button>
					</div>
				</div>
			</form>
		@endif


		</div>


	</div>
	</comment>
</div>
