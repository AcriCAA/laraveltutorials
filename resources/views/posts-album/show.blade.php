
@section('content')

{{$column_divisor = 1%3}}

        <div class="album text-muted">
        <div class="container">

        @foreach($articles['data'] as $article)


        @if (($loop->index % 3) === $column_divisor)
        	<div class="row">

        @endif

        @if(($loop->index % 3) === 0)
     
                   
              <div class="card">
                 <img data-src="holder.js/100px280?theme=thumb" alt="Card image cap">
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            </div>
        </div> {{-- close the row --}}    
        
        @else
          <div class="card">
               <img data-src="holder.js/100px280?theme=thumb" alt="Card image cap">
               <h2>{{$article['attributes']['title']}}</h2>
                <p class="card-text">{{$article['attributes']['description']}}</p>
                <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            </div>
        @endif
        @endforeach

		</div> {{-- album text muted --}}
	
	</div> {{-- container --}}

    

@endsection

