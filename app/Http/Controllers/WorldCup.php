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

		$games = $this->parseResponse($games, $response); 

		echo '<pre>';
		print_r($games); 
		echo '</pre>';
	}


	public function wcapi(Request $request)


	{


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

// whichMatches holds the text value to be passed into the json output for slack 
			$whichMatches = "All Matches"; 


// default state of the api call
$uri = $apipath;



//looking at the $text to determine which api call 
			if(strcasecmp($text, $current) == 0)
			{ 
				$uri = $apipath.$currentEvent;
				$whichMatches = "Current Matches";
			}

			if(strcasecmp($text, $today) == 0)
			{ 
				$uri = $apipath.$todayEvent;
				$whichMatches = "Today's Matches";
			}


// using httpful.phar to get and parse JSON object from API 
// http://phphttpclient.com
			$response = \Httpful\Request::get($uri)->send();

			$games = [];

			$games = $this->parseResponse($games, $response); 


			$game_text = implode("\n", $games);

			// creating slack json attachments array
			$arr = array("title" => "Scores",
				"text" => $game_text);

			return response()->json([
				'text' => $whichMatches,
				'attachments' => array($arr)
			]);


// echo $jsonMessage;
} //close slack check else


} // close function 






public function parseResponse($games, $response){



			if(!empty($response->body)){
				foreach($response->body as $match){

					//if it is to be determined, don't add it to the array
					if($match->home_team->country !== "To Be Determined"){

						$matchstring = "_".$match->location."_"."\n"; 

						$gme_date = $match->datetime; 
						date_default_timezone_set('America/New_York');
						$game_date = date('M d, Y g a', strtotime($gme_date)); 
						
						
						$matchstring.= "*".$game_date . "*\n"; 
						
						$matchstring.=  $match->home_team->country;

						$matchstring.= " "; 

						$home_goals = 0; 
						if(!empty($match->home_team->goals))
							$home_goals = $match->home_team->goals;

						$matchstring.= '-* '.$home_goals. '*'; 



						$matchstring.= " v. "; 

						$away_goals = 0; 
						if(!empty($match->away_team->goals))
							$away_goals = $match->away_team->goals;

						$matchstring.= '*'.$away_goals. '* - '; 


						$matchstring .= $match->away_team->country;



						$matchstring.= "\n "; 
						$matchstring .= "`".$match->time."`";						
						$matchstring.= "\n "; 

						

						if(null !== $match->last_event_update_at){
						$dte = $match->last_event_update_at; 
						date_default_timezone_set('America/New_York');	
						$date = date('M d, Y g a', strtotime($dte)); // 2018-01-05
						$matchstring.= "_"."Last Update: ".$date . "_"."\n"; 
						}


						

						array_push($games, $matchstring);
					}



				}

			}

			return $games; 

} // close parse response


 } //close class
