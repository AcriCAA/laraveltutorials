@extends('layouts.layout')


@section('content')


      <main role="main" class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

         @include('posts.post')

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
