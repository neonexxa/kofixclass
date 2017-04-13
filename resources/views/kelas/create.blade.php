@extends('layouts.materializehead')

@section('content')
<div class="row">
    <div class="col s12 m6 offset-m3 z-depth-5" style="padding: 30px">
        {!! Form::open(['route' => 'class.store', 'files' => true]) !!}
            @include('kelas.kelas',['form_name' => 'New Kelas','button_data' => 'Submit Kelas'])
        {!! Form::close() !!}
    </div>
</div>
@endsection
