<!doctype html>
<html>
<head>

	<title>@yield('title')</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<meta name="description" content="Project 1: A simple introduction">
	<meta name="author" content="Xia Zhang">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="styles/p3.css" type="text/css">

</head>

<body>
	<div class='container'>
		<div class="jumbotron">
			<h1>Welcome to My Project 3</h1>
			<h2>Random Paragraph and User Generator</h2>
		</div>

			@yield('content')

	</div>

</body>

</html>