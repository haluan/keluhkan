@extends('layouts.master')

<h1>Edit {{ $post->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', null, array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit the post!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}