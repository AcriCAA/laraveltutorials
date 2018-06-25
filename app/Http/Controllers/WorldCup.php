<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorldCup extends Controller
{
	public function test(){
		$apipath = config('services.slack.wc_api');
		$uri = "https://worldcup.sfg.io/matches/country?fifa_code=ARG";
		
		$response = \Httpful\Request::get($uri)->send();

		$games = [];

		$games = $this->parseResponse($games, $response); 


		if(count($games) > 0){
		echo '<pre>';
		print_r($games); 
		echo '</pre>';
		}

	}

	public function slackChallenge(Request $request){


		  $payload = $request->json();

    if ($payload->get('type') === 'url_verification') {

    	$returnstring = "HTTP 200 OK\nContent-type: text/plain\n".$payload->get('challenge');

        
    	return $returnstring
        

        
    }


	}


	public function wcapi(Request $request)


	{


		$command = $request->input('command');
		$token = $request->input('token');
		$text = $request->input('text');


		$slack_token = config('services.slack.token');
		$slack_token_cfp = config('services.slack.token_cfp');

		$apipath = config('services.slack.wc_api');

		$nextEvent = $apipath;

		$todayEvent = 'today';

		$country = 'ARG'; 
		$countrycall = 'country?fifa_code=';


		$currentEvent = 'current';

		$apipath = config('services.slack.wc_api');

		$uri = $apipath;


		if($token == $slack_token || $token == $slack_token_cfp){ 
		

// a user can type to get the today's games, all games or the current game(s)
// $current = "current";
			$next = "next";
			$current = "current";
			$today = "today";
			$future = FALSE;

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

			if(strcasecmp($text, $next) == 0)
			{ 
				$future = TRUE; 
			}

			if(strlen($text) == 3 && (strtoupper($text) == $text)){
				$uri = $apipath.$currentEvent;
  				$whichMatches = $text . " Matches";
  				$uri = $apipath.$countrycall.$text;
			}


// using httpful.phar to get and parse JSON object from API 
// http://phphttpclient.com
			$response = \Httpful\Request::get($uri)->send();

			$games = [];

			$games = $this->parseResponse($games, $response); 

			if(count($games) > 0){

			$game_text = implode("\n", $games);

			// creating slack json attachments array
			$arr = array("title" => "Games",
				"text" => $game_text);

			}
			else 
				$arr = array("title" => "Sorry, no games right now");

			return response()->json([
				'text' => $whichMatches,
				'attachments' => array($arr)
			]);


} //close slack check if
		else{
	$msg = "This slash command is broken.";
			die($msg);
			echo $msg;
		}




} // close function 






public function parseResponse($games, $response){



			if(!empty($response->body)){
				foreach($response->body as $match){

					//if it is to be determined, don't add it to the array
					if($match->home_team->country !== "To Be Determined"){

						


						$matchstring = ":stadium: "."_".$match->location."_"."\n"; 

						$gme_date = $match->datetime; 
						date_default_timezone_set('America/New_York');
						$game_date = date('M d, Y g a', strtotime($gme_date)); 
						
						
						$matchstring.= "*".$game_date. " (EST)*\n"; 
						
						$matchstring.=  ":soccer: ".$match->home_team->country;

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


						$matchstring .= $match->away_team->country." :soccer:";


						if(!empty($match->time)){
						$matchstring.= "\n"; 
						$matchstring .= ":clock1: "."`".$match->time."`";						
						$matchstring.= "\n "; 
						}
						

						if(null !== $match->last_event_update_at){
						$dte = $match->last_event_update_at; 
						date_default_timezone_set('America/New_York');	
						$date = date('M d, Y g a', strtotime($dte)); // 2018-01-05
						$matchstring.= "_"."Last Update: ".$date. " (EST)_"."\n\n"; 
						}
						else
							$matchstring.= "\n\n"; 

						


						

						array_push($games, $matchstring);
					}



				}

			}

			return $games; 

} // close parse response


 } //close class
