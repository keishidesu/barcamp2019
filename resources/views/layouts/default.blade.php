<!doctype html>
<html>

	<head>

		@include('components.head')

		<title>BarCamp Cyberjaya 2019 | @yield('title')</title>
 	  	
	</head>

	<body>

			@include('components.nav')

	    	@yield('content')
	    	
	     	@include('components.footer')

	</body>
	
</html>