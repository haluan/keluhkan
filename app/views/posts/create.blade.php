@extends('layouts.master')
<div class='col-lg-2'></div>

<div class='col-lg-8'>

	<div class="well-lg bg-white">
		<div class="text-center">
			<h2>Buat keluhan Baru </h2>
		</div>
		<hr>

		<!-- if there are creation errors, they will show here -->
		{{ HTML::ul($errors->all()) }}

		{{ Form::open(array('url' => 'posts')) }}

		    <div class="form-group">
		        {{ Form::label('titile', 'Title') }}
		        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
		    </div>

		    <div class="form-group">
		        {{ Form::label('body', 'Keluhan') }}
		        {{ Form::textarea('body', Input::old('body'), array('class' => 'form-control')) }}
		    </div>

		   

		    {{ Form::submit('Keluhkan!', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}
	</div>
</div>