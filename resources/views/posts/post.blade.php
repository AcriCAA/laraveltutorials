 <div class="blog-post">
            
        <a href="/posts/{{$post->id}}">

            <h2 class="blog-post-title">{{$post->title}}</h2>
        </a>
            {{-- The date string is using the Carbon library that is built in Laravel --}}
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}<a href="#">Mark</a></p>

            <p>{{$post->body}}</p>


          </div><!-- /.blog-post -->

         