

<?php $column_divisor = 1/3;
var_dump($column_divisor); ?>

        <div class="album text-muted">
        <div class="container">
        

        @foreach($articles['data'] as $article)

        {{-- {{var_dump($loop->index)}} --}}
        <?php 
        $column_count = $loop->index + 1;
        $n = $column_count / 3; 
		$whole = floor($n);      
		$fraction = $n - $whole; 
        $column_calculation = $fraction;
var_dump($column_calculation);

		$odd_calculation = $column_count % 3; 
		
        ?>

       

        {{-- first column --}}

        @if ($column_calculation === $column_divisor)
        	<div class="row">
        		<div class="card">
        			<?php echo "Column Number=" .$column_count. " Column Calulation= ".$column_calculation." Odd Calculation=" . $odd_calculation; ?>
                 <img data-src="holder.js/100px280?theme=thumb" alt="Card image cap">
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            	</div>
        

        {{-- last third column --}}
        @elseif($loop->index != 0 && $odd_calculation === 0)
     			
              <div class="card">
              	Case 2 last column
                 <img data-src="holder.js/100px280?theme=thumb" alt="Card image cap">
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            </div>
        </div> {{-- close the row --}}    
        
        {{-- middle column --}}
        @elseif($odd_calculation != 0)
          <div class="card">
          		Case 3 middle column
               <img data-src="holder.js/100px280?theme=thumb" alt="Card image cap">
               <h2>{{$article['attributes']['title']}}</h2>
                <p class="card-text">{{$article['attributes']['description']}}</p>
                <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            </div>
        @endif
        @endforeach

		</div> {{-- album text muted --}}
	
	</div> {{-- container --}}

    

