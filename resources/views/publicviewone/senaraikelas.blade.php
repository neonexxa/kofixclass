@extends('layouts.public')

@section('content')

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
				<br>
				<a href="{{ route('preview.show', ['preview' => $class_value->id]) }}" class="cd-read-more">More info</a>
				<span class="cd-date">{{ Carbon\Carbon::parse($class_value->Date)->formatLocalized('%A %d %B %Y') }}</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	<!-- end loop -->
	
	@endforeach

	</section> <!-- cd-timeline -->

@endsection
