@extends('albummaster')


@section('content')


    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Autonomous Vehicles</h1>
          <p class="lead text-muted">The latest and most current news on autonomous vehicles, driving, and technology. You've been the Edged.</p>
          <p>
          <p class="lead text-muted">Looking for more content like this?</p>
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
