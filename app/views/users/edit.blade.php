@extends('layouts.master')
{{ HTML::ul($errors->all()) }}

{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'files' => true)) }}
<div class='col-lg-3'></div>
<div class="col-lg-2 well-lg bg-white">
            <div class="upload-preview">
             @if($user->picture->url() != "/pictures/original/missing.png")
                <img src="<?= $user->picture->url('thumb') ?>" >
            @else
                <img src="http://www.lender411.com/images/icons-new/question.png" style="width:100%;" >
            @endif
            </div>
            <hr>
             <div class="form-group">
                {{ Form::label('picture', 'Picture') }}
                {{ Form::file('picture', Input::old('picture'), array('class' => 'form-control')) }}
            </div>
</div>
<div class='col-lg-4'>
   <div class="well-lg bg-white" style="box-shadow: 1px 1px 1px 1px white;">
     <h1>Edit Profil</h1>

        <!-- if there are creation errors, they will show here -->
        

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, array('class' => 'form-control')) }}
            </div>


            {{ Form::submit('Simpan', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
       </div>    
    </div>
<div class='col-lg-4'></div>

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