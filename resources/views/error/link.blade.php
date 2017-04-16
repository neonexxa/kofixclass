@extends('layouts.public')

@section('content')

<h2 style="font-size: 3.5em; text-align: center;margin: 100px 0;">The link you requested is not available <i class="fa fa-file-code-o" aria-hidden="true"></i></h2>
<div class="prev_next">
	<a href="{{ route('preview.index') }}">All Classes <i class="fa fa-globe" aria-hidden="true"></i></a>
	<a href="{{ URL::previous() }}">Go Back <i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
</div>
@endsection