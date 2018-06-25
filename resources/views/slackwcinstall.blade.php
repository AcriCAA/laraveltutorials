<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Slack World Cup Slash Command</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #cc0000;
                color: white;
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
                color: white;
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
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-sm">
                                <h1 class="text-center mt-5">Slack World Cup Slash Command</h1>
                    </div>
                </div>


                 <div class="row mt-5">
                    <div class="col-sm-12 col-md-7 col-lg-7">
                   <div class="px-5">
                              <a href="https://slack.com/oauth/authorize?client_id=76083133201.386216728352&scope=commands"><img src="http://coreyacri.net/work/wc_slash.gif" class="img-fluid"/></a>
                            </div>
                    </div>
                

                                
                     <div class="col-sm-12 col-md-5 col-lg-5 pt-3">

                        <h2>World Cup updates with a slash command</h2>
                        
                        <p><a href="https://slack.com/oauth/authorize?client_id=76083133201.386216728352&scope=commands"><img alt="Add to Slack" height="40" width="139" src="https://platform.slack-edge.com/img/add_to_slack.png" srcset="https://platform.slack-edge.com/img/add_to_slack.png 1x, https://platform.slack-edge.com/img/add_to_slack@2x.png 2x" /></a></p>
                        <p>Usage</p>

<ul>
<li>use <code>/games current</code> to get the current games being played</li>
<li>use <code>/games today</code> to get the day's games</li>
<li>use <code>/games all</code> to get all the games played</li>
<li>use <code>/games ARG</code> (any three letter country abbreviation) for a countries</li>
</ul>

                        
                    </div>
                </div>
                

                <div class="row mt-5 p-5">
                    <div class="col-sm">
                                <div class="links text-center">
                                    <a href="http://www.coreyacri.com/work/">Corey Acri</a>
                                    <a href="http://agstrategic.design/case-studies/">AG Strategic Design</a>
                                </div>
                    </div>
                </div>


            </div>
         
    </body>
</html>


