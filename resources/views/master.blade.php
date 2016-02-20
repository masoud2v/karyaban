<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
<!-- 
		<link rel="stylesheet" href="css/reset.css">
		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'> -->
		<!-- <link rel="stylesheet" href="css/style.css"> -->
		{{ Html::style('css/reset.css') }}
		{{ Html::style('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900')}}
		{{ Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}
		{{ Html::style('css/style.css') }}
	</head>
	<body>
	 	@yield('content')

	 	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="js/index.js"></script>
	</body>
</html>
