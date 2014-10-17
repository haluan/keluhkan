
@extends('layouts.master')
<div class='col-lg-2'></div>

<div class='col-lg-8'>
	@if (Session::has('message'))
	    <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<div class="well-lg bg-white">
		<div class="text-center">
			<h2>Buat keluhan Baru </h2>
		</div>
		<hr>

		<!-- if there are creation errors, they will show here -->
		{{ HTML::ul($errors->all()) }}

		{{ Form::open(array('url' => 'posts', 'files' => true)) }}

			<div class="form-group">
		        {{ Form::label('nama_perusahaan', 'Nama Perusahaan Terkait') }}
		        {{ Form::text('nama_perusahaan', Input::old('nama_perusahaan'), array('class' => 'form-control')) }}
		    </div>
		    <div class="form-group">
		        {{ Form::label('titile', 'Title') }}
		        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
		    </div>
		    <div class="upload-preview">
              <img style="width:30%;" />
              <label class="ukuran_file"></label>
            </div>
		     <div class="form-group">
		        {{ Form::label('picture', 'Picture') }}
		        {{ Form::file('picture', Input::old('picture'), array('class' => 'form-control')) }}
		    </div>

		    <div class="form-group">
		        {{ Form::label('body', 'Keluhan') }}
		        {{ Form::textarea('body', Input::old('body'), array('class' => 'form-control')) }}
		    </div>		   

		    {{ Form::submit('Keluhkan!', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}
	</div>
</div>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    //JS File
    $(document).ready(function(){
     	var preview = $(".upload-preview img");
        $("#picture").change(function(event){
            var input = $(event.currentTarget);
            var file = input[0].files[0];
            var reader = new FileReader();
            if(file.size >500000){
              alert("Ukuran file terlalu besar");
              $(".file").val("");
            }else{
              reader.onload = function(e){
                image_base64 = e.target.result;
                preview.attr("src", image_base64);
            };
            reader.readAsDataURL(file);
            }
        });
    });
</script>