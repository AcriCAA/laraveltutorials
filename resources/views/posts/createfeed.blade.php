@extends('layout')


@section('content')



      <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <h1>Publish a Post</h1>



<div class="form-group">
<form method="POST" action="/cshl">

{{-- include csrf field in all of our forms for authentication --}}
   {{ csrf_field() }}


  <div class="form-group">
    <label for="title">Token: </label>
    <input type="text" class="form-control" id="title" name="title" required >
  </div>


  

<div class="form-group">

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

</div> {{-- container --}}

</div> {{-- col --}}
</div> {{-- row --}}

@endsection 