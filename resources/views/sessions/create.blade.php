@extends('layouts.master')

@section('content')

<div class="col-sm-8">
<form method="POST" action="/register">

{{-- include csrf field in all of our forms for authentication --}}
	 {{ csrf_field() }}


  <div class="form-group">
    <label for="name">Name: </label>
    <input type="text" class="form-control" id="name" name="name" required >
  </div>


  <div class="form-group">
    <label for="email">Email: </label>
    <textarea type="text" class="form-control" id="email" name="email" required ></textarea>
  </div>

    <div class="form-group">
    <label for="password">Password: </label>
    <textarea type="text" class="form-control" id="password" name="password" required ></textarea>
  </div>

</div>

<div class="form-group">

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</div>




@endsection