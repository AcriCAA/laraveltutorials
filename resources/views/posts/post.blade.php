 <div class="blog-post">

 	<a href="/posts/{{$post->id}}">

 		<h2 class="blog-post-title">{{$post->title}}</h2>
 	</a>
 	{{-- The date string is using the Carbon library that is built in Laravel --}}
 	<p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}<a href="#">Mark</a></p>

 	<p>{{$post->body}}</p>

 	<hr> 

 	<div class="comments">
 		<ul class="list-group">
 			@foreach ($post->comments as $comment)

 			<strong>{{$comment->created_at->diffForHumans()}}</strong>

 			<li class="list-group-item">{{$comment->body}}</li>

 			@endforeach
 		</ul>
 	</div>

 	{{-- add a comment --}}


 	<div class="card">

 		<form method="POST" action="/posts/{{ $post->id }}/comments}}"> 

 			{{ csrf_field() }}

 			<div class="card-block">

 				@include('layouts.partials.errors')
 				<div class="form-group">

 					<textarea name="body" placeholder="Your Comment Here" class="form-control"></textarea>

 				</div>

 	

 				<div class="form-group">

 					<button type="submit" class="btn btn-primary">Submit</button>
 				</div>

 			</div>

 			</div>

 		</div>


 	</div><!-- /.blog-post -->

