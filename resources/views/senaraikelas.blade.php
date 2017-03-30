<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Schedule Class</title>
</head>
<body>
	<header>
		<img src="/Kofix.png" alt="" style="width:20%">
	</header>

	<section id="cd-timeline" class="cd-container">

	
	@foreach ($classes as $class_key => $class_value)
	
	 
	<!-- begin loop -->
		<div class="cd-timeline-block">
			<div class="cd-timeline-img {{ $icon_background[array_rand($icon_background)] }}">
				<img src="{{ $icon[array_rand($icon)] }}" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>{{ $class_value->Title }}</h2>
				<p>{{ $class_value->Description }}</p>
				<a href="{{ $class_value->Register_link }}" class="cd-read-more">Register Now!!</a>
				<span class="cd-date">{{ Carbon\Carbon::parse($class_value->Date)->formatLocalized('%A %d %B %Y') }}</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	<!-- end loop -->
	
	@endforeach

	</section> <!-- cd-timeline -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>