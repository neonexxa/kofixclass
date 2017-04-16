@extends('layouts.public')

@section('content')
<br>
<div class="prev_next">
	<a href="{{ route('preview.show', ['preview' => $previous]) }}"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Previous</a>
	<a href="{{ route('preview.index') }}"><i class="fa fa-globe" aria-hidden="true"></i> All <i class="fa fa-globe" aria-hidden="true"></i></a>
	<a href="{{ route('preview.show', ['preview' => $next]) }}">Next <i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
</div>

	<div class="kelas_float">
		<div class="one_title">
			{{$class->Title}}
		</div>
		<div class="one_time">
			{{$class->Date}}
		</div>
		<div class="one_poster">
			@if ($class->Poster == "noimage" || $class->Poster == null)
                <img src="/img/firewall_man.png" alt="" width="100%" height="250">
            @else
                <img src="/uploads/{{ $class->id }}/{{$class->Poster}}" alt="" width="100%" height="155">
            @endif
                                                
		</div>
		<div class="one_description">
			<p>
				{{$class->Description}}
			</p>
		</div>
		<div class="one_detail">
			<strong>Time :</strong>		 {{$class->Time}}   	<br>
			<strong>Location :</strong>	 {{$class->Location}}   <br>
			<strong>Price :</strong>	 {{$class->Price}}   	<br>
		</div>
		<div class="one_action">
			<a href="{{ $class->Register_link }}">Register Now!!</a>
		</div>
	</div>
<div class="prev_next">
	<a href="{{ route('preview.show', ['preview' => $previous]) }}"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Previous</a>
	<a href="{{ route('preview.index') }}"><i class="fa fa-globe" aria-hidden="true"></i> All <i class="fa fa-globe" aria-hidden="true"></i></a>
	<a href="{{ route('preview.show', ['preview' => $next]) }}">Next <i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
</div>
@endsection
