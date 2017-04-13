<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script src="/js/app.js"></script>
</head>
<body>
	@include('layouts.nav')
	<div class="container">
		@if(session('msg'))
			<div class="alert alert-warning">{{session('msg')}}</div>
		@endif
		@yield('content')

	</div>
	{{-- @include('layouts.footer')--}}
	@yield('script')
</body>
</html>