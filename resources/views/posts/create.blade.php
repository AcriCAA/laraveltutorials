@extends('layouts.layout')


@section('content')



      <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

        	<h1>Publish a Post</h1>


@if(count($errors))

<div class="row">
	<div class="col-sm-12 alert-danger">

		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>

	</div>
</div>

@endif

<form method="POST" action="/posts">
{{-- include csrf field in all of our forms for authentication --}}
	{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title: </label>
    <input type="text" class="form-control" id="title" name="title" required >
  </div>


  <div class="form-group">
    <label for="body">Body</label>
    <textarea type="text" class="form-control" id="body" name="body" required ></textarea>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div> {{-- container --}}

</div> {{-- col --}}
</div> {{-- row --}}

@endsection 