@extends('layouts.layout')


@section('content')

<h1>Publish a Post</h1>


<form method="POST" action="/posts">
{{-- include csrf field in all of our forms for authentication --}}
	{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title: </label>
    <input type="text" class="form-control" id="title" name="title">
  </div>


  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" nam="body">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection 