	<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/slack/installpage', function () {
    return view('slackwcinstall');
});

Route::get('/privacy', function () {
    return view('privacy');
});




Route::get('success','WorldCup@success'); 

Route::get('/wc', 'WorldCup@test');
Route::post('/worldcup', 'WorldCup@wcapi');

Route::get('/login/slack', function(){
    return Socialite::with('slack')
        ->scopes(['commands'])
        ->redirect();
});

Route::get('/slack/install/worldcupgamesslash', function(){
    return Socialite::with('slack')
        ->scopes(['commands'])
        ->redirect();
});

Route::get('/connect/slack', function(\GuzzleHttp\Client $httpClient){
    $response = $httpClient->post('https://slack.com/api/oauth.access', [
        'headers' => ['Accept' => 'application/json'],
        'form_params' => [
            'client_id' => env('SLACK_KEY'),
            'client_secret' => env('SLACK_SECRET'),
            'code' => $_GET['code'],
            'redirect_uri' => env('SLACK_REDIRECT_URI'),
        ]
    ]);

    // echo '
    // <h1>Slack World Cup Slash Command Installed!</h1>
    // <h4>by: <em><a href="http://www.coreyacri.com">Corey Acri</a></em></h4>
    // <h2>Slack World Cup App installed!</h2>
    // <h3>To use:</h3>
    // <p>type <code>/games</code> plus <code>current </code><code>today </code>or<code>all </code></p>'; 

    return view('success');

});


Route::get('/feed', 'FeedController@show');

Route::get('/directions', 'FeedController@directions');

Route::post('/cshl', 'CSHLFeedController@testResponse');    


Route::get('/map', function(){

return view('map'); 	
});

