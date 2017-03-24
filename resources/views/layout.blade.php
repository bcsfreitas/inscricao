<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
		@if(session('msg'))
			<div class="alert alert-warning">{{session('msg')}}</div>
		@endif

		@yield('content')
	</div>
</body>
</html>