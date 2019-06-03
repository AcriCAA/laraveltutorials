<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Eluceo\iCal;
use Carbon; 
use App\Calendar as Cal; 

class CalendarController extends Controller
{
   

    public function create(){

		return view('cal.create'); 
	}


	
	public function store()

	{

		$this->validate(request(), [
//edit these to coressponding user fields
			'title' => 'required', 
			
			//must have at the front be a number and be 11 digits
			
			

		]);

	$vEvent = new \Eluceo\iCal\Component\Event();
	// return $vEvent; 
		
		$calendar = new Cal(); 
		//Create a new calendar using the request data

		$calendar->title = request('title'); 


		$startdate = request('starttime');
		$calendar->start = $startdate; 

		$calendar->end = request('endtime'); 
		$title = request('title'); 
		return $title; 
		return redirect('/')->with('status', 'record logged');

	}

}
