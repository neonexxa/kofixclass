@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT', 'files' => true)) }}
            <div class="row">
                <div class="input-field col s12">
                    {{ Form::text('title', null, array('class' => 'validate')) }}
                    <label for="title">title</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {{ Form::text('storyline', null, array('class' => 'validate')) }}
                    <label for="storyline">Description</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {{ Form::text('source', null, array('class' => 'validate')) }}
                    <label for="source">Content By</label>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    {{ Form::file('image', null, array('class' => 'validate')) }}
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
            </div>
            
            <button class="btn waves-effect waves-light" type="submit" name="action">Save
    <i class="material-icons right">send</i>
  </button>
        {{ Form::close() }}
    </div>
</div>
@endsection

