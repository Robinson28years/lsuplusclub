<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
	@yield('style')
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ mix('css/home.css') }}">
	<link href="http://cdn.bootcss.com/element-ui/1.1.6/theme-default/index.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
		{{-- @include('layouts.nav') --}}

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
	<script type="text/javascript">
	@yield('js')
	</script>
    @yield('js2')
</body>
</html>
