@extends('layouts.master')
<div class="col-lg-12" >
@if (Session::has('message'))
	    <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<div class="text-center">
		<h1>Keluhan terbaru</h1>
	</div>
</div>
@extends('layouts.list_post')