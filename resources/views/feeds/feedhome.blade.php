@extends('layouts.master')


@section('content')


      <main role="main" class="container">

      <div class="row">

        <div class="col-sm-12">
        @foreach($articles['data'] as $article)
        <div class="row">
          <div class="col-sm-12">
         <h2>{{$article['attributes']['title']}}</h2>
          <p>{{$article['attributes']['description']}}</p>
  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>';
  



       </div> {{-- row --}}
        @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
          @include('layouts.partials.about')
          @include('layouts.partials.archives')
          @include('layouts.partials.social')
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

@endsection