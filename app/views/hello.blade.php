@extends('layouts.master')
<div class="text-center">
		<h1 style="font-size: 60px;">Keluhan terbaru</h1>
		@if($date)
			<strong>Pada tanggal: </strong>{{date("d M Y", strtotime($date))}}
		@endif
	</div>
<div class="col-lg-3">
	<div class="well-lg bg-white">
		<h4>
			Pilih berdasarkan tanggal
		</h4>
		{{ Form::open(array('url' => 'search_by_date', 'method' => 'get')) }}

			<div class="form-group">
		       <input type="date" name="selected_date">
		    </div>
		    

		    {{ Form::submit('Cari', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}
	</div>
</div>
<div class="col-lg-6" >
	
	@foreach($posts as $key => $value)
 	<div class="well-sm col-lg-12" style="margin : 5px;;background-color: white; box-shadow: 1px 1px 1px 1px #888888; padding-bottom: 10px;">
 	<div >
 		<bold class="bg-red">{{$value->nama_perusahaan}}</bold> |
 		<a href="{{ URL::to('posts/' . $value->id) }}"><strong>{{$value->title}}</strong></a>
 		<p class="fa fa-clock-o" style="color: #D2D7D3;">
 			{{date("d M Y", strtotime($value->created_at))}}
 		</p>
 	</div>
 	@if($value->picture->url() != "/pictures/original/missing.png")
 	<img src="<?= $value->picture->url('thumb') ?>" >
 	@endif
 	<div>
 		<a href="{{ URL::to('posts/' . $value->id) }}">
 			<blockquote class="black">
		 			{{Str::limit($value->body, 40)}}
		 	</blockquote>
		</a>
 	</div>
 	</div>
 @endforeach
</div>
<br>
