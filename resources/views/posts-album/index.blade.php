@php
   $image = $articles['data'][0]['attributes']['thumbnail'];
@endphp


@extends('albummaster')


@section('content')
<style>

.header-bg {
  width:100%;
  /*height:475px;*/
  background:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("{{$image}}");
  background-size:cover;
  
}

.white {


  color: white;

}

</style>
    <main role="main">

      <section class="jumbotron text-center header-bg">
        <div class="container">
          <h1 class="jumbotron-heading white">Autonomous Vehicles</h1>
          <p class="lead white">The latest and most current news on autonomous vehicles, driving, and technology. You've been the Edged.</p>
          <p>
          <p class="lead white">Looking for more content like this?</p>
          <p>
            <a href="http://www.theedge.group/" class="btn btn-primary">Contact Edge Group</a>
          </p>
        </div>
      </section>

      <div class="album text-muted">
        <div class="container">
        
            @include('posts-album.show')

        </div>
      </div>

    </main>

@endsection
