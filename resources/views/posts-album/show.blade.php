

<?php $column_divisor = round((1/3),2);
		?>

        <div class="album text-muted">
        <div class="container">
        

        @foreach($articles['data'] as $article)

        {{-- {{var_dump($loop->index)}} --}}
        <?php 
        $column_count = $loop->index + 1;
        $n = $column_count / 3; 
		$whole = floor($n);      
		$fraction = $n - $whole; 
        $column_calculation = round($fraction, 2);


		$odd_calculation = $column_count % 3; 
		
        ?>

       

        {{-- first column --}}

        @if ($column_calculation === $column_divisor)
        	<div class="row">
        		<div class="card">
                 <img data-src="{{$article['thumbnail']}}" alt="Card image cap">
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            	</div>
        

        
        
        {{-- middle column --}}
        @elseif($odd_calculation != 0)
          <div class="card">
          		
      
               <img data-src="{{$article['thumbnail']}}" alt="Card image cap">
               <h2>{{$article['attributes']['title']}}</h2>
                <p class="card-text">{{$article['attributes']['description']}}</p>
                <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            </div>

        {{-- last third column --}}
        @elseif($odd_calculation === 0)
     			
              <div class="card">
              	
         
                 <img data-src="{{$article['thumbnail']}}" alt="Card image cap">
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            </div>
        </div> {{-- close the row --}}    
        @endif
        @endforeach

		</div> {{-- album text muted --}}
	
	</div> {{-- container --}}

    

