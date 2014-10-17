@extends('layouts.master')
<div class="col-lg-3"></div>
<div class="col-lg-6" >
	<div class="well col-lg-12" style="margin : 5px;;background-color: white; box-shadow: 1px 1px 1px 1px #888888; padding-bottom: 10px;">
		
		<div class="well text-center" style="margin-left:30%;margin-right:30%;"> 
			@if($user->picture->url() != "/pictures/original/missing.png")
				<img src="<?= $user->picture->url('thumb') ?>" >
			@else
				<img src="http://www.lender411.com/images/icons-new/question.png" width="100" height="100" >
			@endif
		</div>
		<p><strong>Nama : </strong>{{$user->name}}</p>
		<p>
			<strong>Email: </strong>{{$user->email}}
		</p>
		<p>
			<strong>Jumlah keluhan: </strong>{{$user->posts()->count()}}
		</p>
		<a href="{{ URL::to('users/' . $user->id . '/edit') }}">edit</a>
	</div>
</div>