<!DOCTYPE html>
<html>
<head>
	<title>
        @yield( 'Bill Calculator Tool')
    </title>

	<meta charset='utf-8'>


<link href="/css/p3.css" type='text/css' rel='stylesheet'>


    @stack('head')

</head>
<body>

	<header>
		<img
        src='http://www.doverlibrary.org/wp-content/uploads/2015/04/money-banner.jpg'
        style='width:600px'
        alt='Bill Calc Dollar'>   <h1> Bill Calculator Tool</h1>

	</header>

	<section>
		@yield('content')
	</section>

	<footer>

	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    @stack('body')

</body>
</html>
