@extends('layouts.materializehead')

@section('content')
<div class="container">
    <div class="row">
    
        {!! Form::open(['url' => '/class', 'files' => true]) !!}
            <div class="row">
            <div class="input-field col s12 m4 offset-m4">
                <input type="text" id="Title" name="Title" placeholder="Title" class="validate">
                <label for="Title">Title</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 offset-m4">
                <input type="text" id="Description" name="Description" placeholder="Description" class="validate">
                <label for="Description">Description</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 offset-m4">
                <input type="date" id="Date" name="Date" placeholder="Date" class="validate datepicker">
                <label for="Date">Date</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 offset-m4">
                {{ Form::select('Time', ['9'    => '9 AM',
                                         '10'   => '10 AM',
                                         '11'   => '11 AM',
                                         '12'   => '12 PM',
                                         '13'   => '1 PM',
                                         '14'   => '2 PM',
                                         '15'   => '3 PM',
                                         '16'   => '4 PM',
                                         '17'   => '5 PM',
                                         '20'   => '8 PM',
                                         '21'   => '9 PM',
                                         '22'   => '10 PM']) }}
                <label for="Time">Time</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 offset-m4">
                <input type="text" id="Location" name="Location" placeholder="Location" class="validate">
                <label for="Location">Location</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s12 m4 offset-m4">
                  <div class="btn">
                    <span>Poster</span>
                    {{ Form::file('Poster') }}
                  </div>
                
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 offset-m4">
                <input type="text" id="Register_link" name="Register_link" placeholder="Register_link" class="validate">
                <label for="Register_link">Register_link</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 offset-m4">
                <input type="text" id="Price" name="Price" placeholder="Price" class="validate">
                <label for="Price">Price</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 offset-m4">
                <input type="text" id="Trainer" name="Trainer" placeholder="Trainer" class="validate">
                <label for="Trainer">Trainer</label>
            </div>
        </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
        {!! Form::close() !!}
    </div>
</div>
@endsection
