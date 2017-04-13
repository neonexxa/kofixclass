@extends('layouts.materializehead')

@section('content')
<div class="row">
    <div class="col s12 m6 offset-m3">
        {!! Form::model($kelas, ['route' => ['class.update', $kelas->id], 'method' => 'PUT', 'files' => true]) !!}
            <!-- \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $kelas->Date)->format('d F, Y')  -->
            @include('kelas.kelas',['form_name' => 'Edit Kelas','button_data' => 'Save Edit'])
            
        {!! Form::close() !!}
    </div>
</div>
@endsection

