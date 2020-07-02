	

 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Ntimes</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link rel = "stylesheet" href = "{{ asset('css/bootstrap.min.css') }}" >

		<!-- Owl Carousel -->
		<link rel = "stylesheet" href = "{{ asset('css/owl.carousel.css') }}" >
		<link rel = "stylesheet" href = "{{ asset('css/owl.theme.default.css') }}" >


		
		<!-- Font Awesome Icon -->
		<link rel = "stylesheet" href = "{{ asset('css/font-awesome.min.css') }}" >
		<link rel = "stylesheet" href = "{{ asset('css/style.css') }}" >


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		@include('temps.header')<br/>
            @yield('content')

            @include('temps.footer')<br/>

	
		<!-- Back to top -->
		
		<!-- jQuery Plugins -->
		<script src="{{  asset('js/jquery.min.js' )}}"></script>
		<script src="{{  asset('js/bootstrap.min.js' )}}"></script>
		<script src="{{  asset('js/owl.carousel.min.js' )}}"></script>
		<script src="{{  asset('js/main.js' )}}"></script>
	</body>
</html>
