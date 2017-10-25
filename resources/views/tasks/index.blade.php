<!doctype html>
{{-- <html lang="{{ app()->getLocale() }}"> --}}

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <ul>
                @foreach ($tasks as $task)
                
                <li>

                    <!-- here we are building the url using the object id -->
                    <a href="/tasks/{{ $task->id }}">
                        {{$task->body}}
                    </a>
                </li>
                @endforeach
            </ul>

        </div>
    </body>
</html>
