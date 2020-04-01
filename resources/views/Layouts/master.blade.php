<html>
	<head>
		<title>頁面名稱- @yield('title')</title>
	</head>
	<body>
		@section('sidebar')
			<h3>top</h3>
		@show
			側邊蘭.	
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>
