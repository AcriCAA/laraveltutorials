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

// Route::get('/', function () {
//     return view('welcome');
// });

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

    echo '
    <h1>Slack World Cup Slash Command Installed!</h1>
    <h4>by: Corey Acri</h4>
    <h2>Slack World Cup App installed!</h2>
    <h3>To use:</h3>
    <p>type <code>/games</code> plus <code>current </code><code>today </code>or<code>all </code></p>'; 

    // return $response; 
    // $return_response = json_decode($response->getBody());
    // return $return_response; 
    // $bot_token = json_decode($response->getBody())->bot->bot_access_token;
    // echo "Your Bot Token is: ". $bot_token. " place it inside your .env as SLACK_TOKEN";
});

// this is setting the url from urlroot/
// Route::get('/tasks', 'TasksController@index');

// // // this is setting the url from urlroot/
// Route::get('/tasks/{task}', 'TasksController@show'); 


// Route::get('/', 'PostsController@index'); 
// Route::get('/posts/create', 'PostsController@create2'); 
// Route::post('/posts', 'PostsController@store'); 
// Route::get('/posts/{post}', 'PostsController@show'); 

// Route::post('/posts/{post}/comments', 'CommentsController@store'); 

// Route::get('/register', 'RegistrationController@create');
// Route::get('/login', 'SessionController@create');

Route::get('/feed', 'FeedController@show');

Route::get('/directions', 'FeedController@directions');


Route::get('/map', function(){

return view('map'); 	
});

// Route::get('posts/create', 'PostsController@create');



// this is setting the url from urlroot/
// Route::get('/tasks/', function(){
// //db call to find a row by id, returns the entire record as object
// // $task = DB::table('tasks')->find($id); 

// $tasks = App\Task::incomplete()->get(); 

// // return $tasks;

// //dd= helper function for dump and die
// // dd($tasks);


// //refers to the route folder and then the blade file name before .blade.php , compact creates the necessary array for the $tasks variable
// return view('tasks.index', compact('tasks'));


// });