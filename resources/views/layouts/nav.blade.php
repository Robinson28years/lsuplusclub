<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<a class="navbar-brand" href="{{ url('/') }}">
				{{ config('app.name', 'LSUplus') }}
			</a>
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Left Side Of Navbar -->
			<ul class="nav navbar-nav">
				&nbsp;
				<li><a href="/discuss">论坛</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						活动报名 <span class="caret"></span>
					</a>

					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="#">
								俱乐部活动
							</a>
						</li>
						<li>
							<a href="acm/sign/">
								学校比赛
							</a>
						</li>
					</ul>
				</li>
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				@if (Auth::guest())
					<li><a href="{{ route('login') }}">登录</a></li>
					<li><a href="{{ route('register') }}">注册</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
							<img class="avatar img-circle" src="{{Auth::user()->avatar}}">
						</a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>