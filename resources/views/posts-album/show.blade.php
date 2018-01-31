

<?php $column_divisor = 1/3;
	var_dump(4/3); ?>

        <div class="album text-muted">
        <div class="container">
        

        @foreach($articles['data'] as $article)

        {{-- {{var_dump($loop->index)}} --}}
        <?php 
        $column_count = $loop->index + 1;
        $column_calculation = $loop->index % 3;

        ?>

        @if($loop->index == 0)

       	<div class="row">
        		<div class="card">
                 <img data-src="holder.js/100px280?theme=thumb" alt="Card image cap">
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            </div>


        @elseif ($loop->index > 0 && $column_calculation === $column_divisor)
        	<div class="row">
        		<div class="card">
                 <img data-src="holder.js/100px280?theme=thumb" alt="Card image cap">
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            </div>
        

        
        @elseif($loop->index != 0 && $column_calculation === 0)
     
              <div class="card">
                 <img data-src="holder.js/100px280?theme=thumb" alt="Card image cap">
                 <h2>{{$article['attributes']['title']}}</h2>
                  <p class="card-text">{{$article['attributes']['description']}}</p>
                  <p class="text-center"><button><a href="{{$article['attributes']['url']}}">READ MORE</a></button></p>
            </div>
        </div> {{-- close the row --}}    
        
        @elseif($loop->index != 0 && $column_calculation > 0)
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

    

