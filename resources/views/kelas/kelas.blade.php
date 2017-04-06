<div class="row">
    <h3>{{$form_name}}</h3>
</div>
<div class="row">
    <div class="input-field">
        {{ Form::label('Title', 'Title') }}
        {{ Form::text('Title', null, array('class' => 'validate')) }}
    </div>
</div>
<div class="row">
    <div class="input-field">
        {{ Form::label('Description', 'Description') }}
        {{ Form::textarea('Description', null, array('class' => 'materialize-textarea', 'data-length' => '250')) }}
    </div>
</div>
<div class="row">
    <div class="input-field">
        {{ Form::label('Date', 'Date') }}
        {{ Form::date('Date', null, array('class' => 'validate datepicker')) }}
    </div>
</div>
<div class="row">
    <div class="input-field">
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
    <div class="input-field">
        <i class="material-icons prefix">settings_input_antenna</i>
        {{ Form::label('Location', 'Location') }}
        {{ Form::text('Location', null, array('class' => 'validate')) }}
    </div>
</div>
<div class="row">
    <div class="file-field input-field">
          <div class="btn">
            <span>Poster</span>
            {{ Form::file('Poster') }}
          </div>
        
    </div>
</div>
<div class="row">
    <div class="input-field">
        <i class="material-icons prefix">language</i>
        {{ Form::label('Register_link', 'Register link') }}
        {{ Form::text('Register_link', null, array('class' => 'validate')) }}
    </div>
</div>
<div class="row">
    <div class="input-field">
        <i class="material-icons prefix">credit_card</i>
        {{ Form::label('Price', 'Price') }}
        {{ Form::text('Price', null, array('class' => 'validate')) }}
    </div>
</div>
<div class="row">
    <div class="input-field">
        <i class="material-icons prefix">perm_identity</i>
        {{ Form::label('Trainer', 'Trainer') }}
        {{ Form::text('Trainer', null, array('class' => 'validate')) }}
    </div>
</div>
<button class="btn waves-effect waves-light" type="submit" name="action">{{$button_data}}
    <i class="material-icons right">send</i>
</button>