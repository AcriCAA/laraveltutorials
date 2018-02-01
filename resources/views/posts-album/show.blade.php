

		@php 
		$column_divisor = round((1/3),2); 
		@endphp


        <div class="album text-muted">
        <div class="container">
        

        @foreach($articles['data'] as $article)

        {{-- {{var_dump($loop->index)}} --}}
        @php
        $column_count = $loop->index + 1;
        $n = $column_count / 3; 
		$whole = floor($n);      
		$fraction = $n - $whole; 
        $column_calculation = round($fraction, 2);


		$odd_calculation = $column_count % 3; 
		
        @endphp 

       

        {{-- first column --}}

        @if ($column_calculation === $column_divisor)
        	<div class="mt-3 d-flex flex-row">
        		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="border: 2px solid rgb(134, 142, 150);>
        	
        		<div class="mr-1 ml-1 p-2">
                <img class="card-img-top" src="{{ URL::to($article['attributes']['thumbnail']) }}"/>
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><a class="btn btn-primary" href="{{URL::to($article['attributes']['url'])}}">READ MORE</a></p>
            	</div>
        </div>

        
        
        {{-- middle column --}}
        @elseif($odd_calculation != 0)
          
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="border: 2px solid rgb(134, 142, 150);>
          
        	<div class="mr-2 ml-2 p-3">
              <img class="card-img-top" src="{{ URL::to($article['attributes']['thumbnail']) }}"/>
               <h2>{{$article['attributes']['title']}}</h2>
                <p class="card-text">{{$article['attributes']['description']}}</p>
                <p class="text-center"><a class="btn btn-primary" href="{{URL::to($article['attributes']['url'])}}">READ MORE</a></p>
            </div>
        </div>

        {{-- last third column --}}
        @elseif($odd_calculation === 0)
     			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="border: 2px solid rgb(134, 142, 150);>
              
              	<div class="mr-2 ml-2 p-3">
         			<img class="card-img-top" src="{{ URL::to($article['attributes']['thumbnail']) }}"/>
                
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><a class="btn btn-primary" href="{{URL::to($article['attributes']['url'])}}">READ MORE</a></p>
            </div>
        </div>
        </div> {{-- close the row --}}    
        @endif
        @endforeach

		</div> {{-- album text muted --}}
	
	</div> {{-- container --}}

    

