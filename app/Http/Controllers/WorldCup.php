<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorldCup extends Controller
{
 	public function test(){
 		$apipath = config('services.slack.wc_api');
 		$uri = "https://worldcup.sfg.io/matches/";
 		$uri = $apipath;
 		$response = \Httpful\Request::get($uri)->send();

$games = [];

foreach($response->body as $match){

$matchstring = $match->home_team->country;
$matchstring.= " "; 

$home_goals = 0; 
if(!empty($match->home_team->goals))
	$home_goals = $match->home_team->goals;

$matchstring.= '-<strong> '.$home_goals. '</strong>'; 



$matchstring.= " v. "; 

$away_goals = 0; 
if(!empty($match->away_team->goals))
	$away_goals = $match->away_team->goals;

$matchstring.= '<strong>'.$away_goals. '</strong> - '; 


$matchstring .= $match->away_team->country;
// $matchstring.= " "; 
// $matchstring.= $match->away_team->goals;


$matchstring.= "\n "; 

array_push($games,$matchstring);

// array_push($games,$match);

}

	echo '<pre>';
 		print_r($games); 
echo '</pre>';
 	}


public function wcapi(Request $request)


{

	  \Log::error('Sending message to slack');

$command = $request->input('command');
$token = $request->input('token');
$text = $request->input('text');


$slack_token = config('services.slack.token');

$apipath = config('services.slack.wc_api');

$nextEvent = $apipath;

$todayEvent = 'today';

$country = 'ARG'; 
$countrycall = 'country?fifa_code=';


$currentEvent = 'current';

$apipath = config('services.slack.wc_api');

$uri = $apipath;
// $response = \Httpful\Request::get($uri)->send();

// echo $command; 
// echo $text;
// echo $token; 

// echo $response; 

if($token != $slack_token){ 
	$msg = "This slash command is broken.";
	die($msg);
	echo $msg;
}

else{

// a user can type "/cfp last" to get the last meetup and "/cfp next" to get the next upcoming meetup so here I am setting the text for string comparison 
// $current = "current";
$next = "next";
$current = "current";
$today = "today";

// whichMeetup holds the text value to be passed into the json output for slack 
// here setting the default text to "Next Meetup"
$whichMatches = "Upcoming Matches"; 

// api call url set in intialize.php
// default state of the api call is the next meetup
$uri = $apipath;



// if user type "/cfp last" this sets the api call url to fetch the current meetup which is defined in the api as "recent_past" here https://www.meetup.com/meetup_api/docs/:urlname/events/#list

// if(strlen($text) == 3 && (strtoupper($text) == $text)){
// $uri = $apipath.$currentEvent;
//   $whichMatches = $text . " Matches";
//   $uri = $apipath.$country.$text;
// }

// if(strcasecmp($text, $current) == 0)
//   { 
//   $uri = $apipath.$currentEvent;
//   $whichMatches = "Current Matches";
//   }

// if(strcasecmp($text, $today) == 0)
//   { 
//   $uri = $apipath.$todayEvent;
//   $whichMatches = "Today's Matches";
//   }

// if(strcasecmp($text, $next) == 0)
//   { 
//   $uri = $apipath;
//   $whichMatches = "Upcoming Matches";
//   }







// using httpful.phar to get and parse JSON object from API 
// http://phphttpclient.com
$response = \Httpful\Request::get($uri)->send();

$games = [];



foreach($response->body as $match){

$matchstring = $match->home_team->country;
$matchstring.= " "; 

$home_goals = 0; 
if(!empty($match->home_team->goals))
	$home_goals = $match->home_team->goals;

$matchstring.= '-<strong> '.$home_goals. '</strong>'; 



$matchstring.= " v. "; 

$away_goals = 0; 
if(!empty($match->away_team->goals))
	$away_goals = $match->away_team->goals;

$matchstring.= '<strong>'.$away_goals. '</strong> - '; 


$matchstring .= $match->away_team->country;
// $matchstring.= " "; 
// $matchstring.= $match->away_team->goals;


$matchstring.= "\n "; 

array_push($games,$matchstring);

// array_push($games,$match);

}

// for($response->body as $match){

// array_push($games,$match->home_team);

// }


// // grab the title of the event from the response
// $title = $response->body[0]->home;



// // grab the time of the event from the response 
// $time = $response->body[0]->time; 
// $timeOffset = $response->body[0]->utc_offset; // time offset in the api is a negative number


// // convert the date and time to user readable format 
// $epoch = ($time+$timeOffset)/1000;
// // echo date('r', $epoch); // output as RFC 2822 date - returns local time
// $date = gmdate('M d', $epoch); 
// $time = gmdate('g a', $epoch);


// // grab the title of the place where the event is being held
// $placeTitle = $response->body[0]->venue->name;

// //grab the street address where the event is being held
// $placeStreet = $response->body[0]->venue->address_1;

// //grab the city where the event is being held 
// $placeCity = $response->body[0]->venue->city; 




// // creating slack json attachments array
//   $arr = array("title" => $title,
//    "text" => $placeTitle
//    ."\n".
//    $placeStreet
//    ."\n".
//    $placeCity
//    ."\n".
//    "When: "
//    .$date
//    ."\n". 
//    "Time: ".$time);

// set json header for Slack 
// header('Content-Type: application/json');

// convert theMessage to json so Slack can read it
// $jsonMessage = json_encode(array("text" => 'hello')); 


// return $jsonMessage;


// return response()->json([
// 	'level' => 'success',
//     'text' => 'hello'  
// ]);

return response()->json([
    'text' => $whichMatches,
    'attachments' => $games
]);


// echo $jsonMessage;
} //close slack check else


}


 } //close class
