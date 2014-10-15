@extends('layouts.master')
<div class='col-lg-4'></div>
<div class='col-lg-4 well bg-white' style="padding:40px;">
    <div class="page-header">
        <h2>Masuk ke Akun Anda</h2>
    </div>

    {{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}

        <!-- Name -->
        <div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
            {{ Form::label('name', 'Name') }}

            <div class="form-group">
                {{ Form::text('name', Input::old('username'), array('class' => 'form-control')) }}
                {{ $errors->first('name', array('class' => 'form-control')) }}
            </div>
        </div>

        <!-- Password -->
        <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
            {{ Form::label('password', 'Password') }}

            <div class="form-group">
                {{ Form::password('password', array('class' => 'form-control'))}}
                {{ $errors->first('password') }}
            </div>
        </div>

        <!-- Login button -->
        <div class="control-group">
            <div class="form-group">
                {{ Form::submit('Login', array('class' => 'btn')) }}
            </div>
        </div>

    {{ Form::close() }}    
</div>
