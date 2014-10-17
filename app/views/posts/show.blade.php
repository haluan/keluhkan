@extends('layouts.master')
<div class="col-lg-2"></div>
<div class="col-lg-8">
	<div class="well-lg bg-white">
		<div>
			<bold class="bg-red">{{$post->nama_perusahaan}}</bold>
		</div>
	    <div class="text-center">
	        <h2>{{ $post->title }}</h2>
		</div>
		<hr>
		<div>
			 <strong>Keluhan:</strong> <br>
			 <div class="well">
			 	{{ $post->body }}
			 	<strong>Oleh: </strong>{{$post->user->name}}
			 </div>
	    </div>
	</div>
</div>