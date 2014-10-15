@extends('layouts.master')
<div class="col-lg-2"></div>
<div class="col-lg-8">
	<div class="well-lg bg-white">
		<div>
			<strong>Oleh: </strong>{{$post->user->name}}
		</div>
	    <div class="text-center">
	        <h2>{{ $post->title }}</h2>
		</div>
		<hr>
		<div>
			 <strong>Keluhan:</strong> <br>
			 <blockquote>
			 	{{ $post->body }}
			 </blockquote>
	    </div>
	</div>
</div>