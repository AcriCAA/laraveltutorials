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

 		echo $response; 

 	}


public function wcapi(Request $request)


{

	$command = $request->input('command');
	$token = $request->input('token');
	$text = $request->input('text');
// These are the new env variables to copy into Meetupcontroller to get today working with key

$slack_token = config('services.slack.token');

$apipath = config('services.slack.wc_api');

$nextEvent = $apipath;

$todayEvent = 'today';

$country = 'ARG'; 
$countrycall = 'country?fifa_code=';


$currentEvent = 'current';

$apipath = config('services.slack.wc_api');

$uri = $apipath;
$response = \Httpful\Request::get($uri)->send();

echo $command; 
echo $text;
echo $token; 

echo $response; 


}
