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

		$arr = array("title" => "Games",
				"author_name" => "Match information from World Cup API by Software for Good",
            "author_link" => "http://worldcup.sfg.io",
            "text" => "game text",
			"footer" => "World Cup Slash Command by Corey @ AG Strategic Design | http://agstrategic.design/");
		return response()->json([
				'text' => 'jsontext',
				'attachments' => array($arr)
			]);

	}

	 public function success (){


    	return view('success'); 

    }

    /*|--------------------------------------------------------------------------
    | World Cup API queries (Corey Acri @AcriCAA)
    |--------------------------------------------------------------------------
    |
    | This queries Software for Good's World Cup API (http://worldcup.sfg.io
    |
    */

	



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


			if(strcasecmp($text, 'help') == 0) {

				echo "This uses Software For Good's World Cup API (http://worldcup.sfg.io) to deliver the day's games.

					\n- use `/games current` to get the current games being played
					\n- use `/games today` to get the day\'s games
					\n- use `/games all` to get all the games played
					\n- use `/games ARG` (any three letter country abbreviation) for a countries";


			}

		else{
		

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
				"author_name" => "Match information from World Cup API by Software for Good",
            "author_link" => "http://worldcup.sfg.io",
            "text" => $game_text,
			"footer" => "World Cup Slash Command by Corey @ AG Strategic Design | http://agstrategic.design/");

			}
			else 
				$arr = array("title" => ":frowning: Sorry, no games to report right now. Try `/games today` or `/games all` instead",
			"author_name" => "Match information from World Cup API by Software for Good",
            "author_link" => "http://worldcup.sfg.io",
			"footer" => "World Cup Slash Command by Corey @ AG Strategic Design | http://agstrategic.design/");

			return response()->json([
				'text' => $whichMatches,
				'attachments' => array($arr)
			]);

		}// close help else

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
						
						
						$matchstring.= ":calendar: "."*".$game_date. " (EST)*\n"; 
						
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
