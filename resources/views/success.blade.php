<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    SUCCESS!
                </div>
<div class="m-b-md">
    <h1>Slack World Cup Slash Command Installed!</h1>
    <h4>by: <em><a href="http://www.coreyacri.com">Corey Acri</a></em></h4>
    <h2>Slack World Cup App installed!</h2>
    
    
<p>Instructions</p>

<ul>
<li>use <code>/games current</code> to get the current games being played</li>
<li>use <code>/games today</code> to get the day's games</li>
<li>use <code>/games all</code> to get all the games played</li>
<li>use <code>/games ARG</code> (any three letter country abbreviation) for a countries</li>

</ul>
</div>

                <div class="links">
                    <a href="http://www.coreyacri.com/work/">Corey Acri</a>
                    <a href="http://agstrategic.design/case-studies/">AG Strategic Design</a>
    
                </div>
            </div>
        </div>
    </body>
</html>


