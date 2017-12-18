@extends('layouts.master')


@section('content')


      <main role="main" class="container">

      <div class="row">

        <div class="col-sm-12 blue-bg">
        @foreach($articles['data'] as $article)
        <div class="row">
          <div class="col-sm-12 pad-30">
         <h2>{{$article['attributes']['title']}}</h2>
          <p>{{$article['attributes']['description']}}</p>
  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
  



       </div> {{-- row --}}
        @endforeach



    </main><!-- /.container -->

@endsection