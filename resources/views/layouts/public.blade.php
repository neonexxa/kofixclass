<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/css/style.css"> <!-- Resource style -->

	<style>
		.kelas_float{
			border-radius: 15px;
			background-color: #F3989B;
			margin: 20px;
			padding: 20px;
			color: white;
		}
		.kelas_float:hover {
			box-shadow: 0 3px 3px 0 rgba(0,0,0,0.14), 0 1px 7px 0 rgba(0,0,0,0.12), 0 3px 1px -1px rgba(0,0,0,0.2);
			background-color: #EE6E73;

		}

		.kelas_float .one_title{
			padding: 20px 0px;
			font-size: 3em;
			
			text-align: center;
		}

		.kelas_float .one_description{
			padding: 20px 0px;
			font-size: 1.5em;
			text-align: justify;
		}

		.kelas_float .one_detail strong{
			font-weight: 900;
		}
		.kelas_float .one_action{
			padding: 20px 0px;
		}
		.one_action a {
		    background-color: #E6E6E6;
			padding: 5px;
			border-radius: 10px;
		    text-decoration: none;
		    color: initial;
		}

		.one_action a:hover {
		    box-shadow: 0 3px 3px 0 rgba(0,0,0,0.14), 0 1px 7px 0 rgba(0,0,0,0.12), 0 3px 1px -1px rgba(0,0,0,0.2);
		    background-color: #F4F4F4;
		}

		.prev_next{
			margin: 0px 20px;
			text-align: center;
		}

		.prev_next a {
		    background-color: #E6E6E6;
			padding: 5px;
			border-radius: 10px;
		    text-decoration: none;
		    color: initial;
		}

		.prev_next a:hover {
		    box-shadow: 0 3px 3px 0 rgba(0,0,0,0.14), 0 1px 7px 0 rgba(0,0,0,0.12), 0 3px 1px -1px rgba(0,0,0,0.2);
		    background-color: #F4F4F4;
		}
	</style>
	<script src="/js/modernizr.js"></script> <!-- Modernizr -->
  	<script src="https://use.fontawesome.com/2961340bdf.js"></script>
	<title>Schedule Class</title>
</head>
<body>
	<header>
		<img src="/Kofix.png" alt="" style="width:20%">
	</header>

	@yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>