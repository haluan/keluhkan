 <div class="col-lg-2"></div>
 <div class="col-lg-10">
 	@foreach($posts as $key => $value)
 	<div class="well col-lg-10" style="margin : 5px;;background-color: white; box-shadow: 1px 1px 1px 1px #888888; padding-bottom: 10px;">
 	<div class="text-center">
 		<a href="{{ URL::to('posts/' . $value->id) }}"><h3>{{$value->title}}</h3></a>
 	</div>
 	<hr>
 	<div class="well-sm">
 		<a href="{{ URL::to('posts/' . $value->id) }}">
 			<blockquote>
		 			{{$value->body}}
		 	</blockquote>
		</a>
 	</div>
 	<hr> 
 	<div>
 		<strong>Oleh:</strong>{{$value->user->name}}
 	</div>
 	</div>
 @endforeach
 </div>