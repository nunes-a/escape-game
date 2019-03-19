<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}"></link>
        <title>@yield('title')</title>
    </head>
    <body>
		<div>
			@yield('content')
		</div>	
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>