@extends('layouts.master')
<div class='col-lg-4'></div>
<div class='col-lg-4  well' style="padding:40px;">
    <h1>Daftar</h1>
    <hr>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'users')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'password') }}
            {{ Form::password('password', array('class' => 'form-control'))}}
        </div>

       

        {{ Form::submit('Daftar', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
</div>