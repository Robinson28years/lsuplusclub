<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-md-12 column" style="
	    padding-left: 0px;
	    padding-right: 0px;
	">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="navbar-header">
						 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

						  <a class="navbar-brand" href="#" style="
	    padding-top: 0px;
	"><img src="{{asset('assets/img/hui.jpg') }}" width=50px;height=50px; alt="" /></a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active">
								 <a href="#"><strong>俱乐部后台管理</strong></a>
							</li>
							<li>
								 <a ></a>
							</li>

							<li>
								 <a href="/">首页</a>
							</li>
							<li>
								 <a href="/vip">会员审核</a>
							</li>
							<li>
								 <a href="/item">活动发布</a>
							</li>
							<li>
								 <a href="/baoming">报名情况</a>
							</li>
							<li>
								 <a href="/allsign">全部注册人员</a>
							</li>
							<li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown">待启用<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li>
										 <a href="#">待启用</a>
									</li>
									<li>
										 <a href="#">待启用</a>
									</li>
									<li>
										 <a href="#">待启用</a>
									</li>
									<li class="divider">
									</li>
									<li>
										 <a href="#">待启用</a>
									</li>
									<li class="divider">
									</li>
									<li>
										 <a href="#">待启用</a>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown">待启用<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li>
										 <a href="#">待启用</a>
									</li>
									<li>
										 <a href="#">待启用</a>
									</li>
									<li>
										 <a href="#">待启用</a>
									</li>
									<li class="divider">
									</li>
									<li>
										 <a href="#">待启用</a>
									</li>
									<li class="divider">
									</li>
									<li>
										 <a href="#">待启用</a>
									</li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">


							@unless (!Auth::check())


								{

								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								{{Auth::user()->name}}	<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
							<li>
								 <a href="/person/{{Auth::user()->email}}">会员账户管理</a>
							</li>

							@if (Auth::user()->admin==1)


							<li> <a href="/vip">后台管理</a></li>
								@endif
							<li class="divider">
							</li>
							<li>
								 <a href="auth/logout">注销</a>
							</li>
						</ul>
							</li>
						}
							@endunless
					@unless (Auth::check())
						{
							<li>
								<a href="auth/login">登录</a>
							</li>
							<li>
								<a href="auth/register">注册 </a>
							</li>
							}
							@endunless

						</ul>
					</div>

				</nav>
			</div>
		</div>
		<div class="row clearfix" style="
	    margin-top: 50px;
	">
</div>
